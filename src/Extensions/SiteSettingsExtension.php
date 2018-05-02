<?php

namespace Feejin\SecurityTemplates\Extensions;
use SilverStripe\Assets\Image;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Core\Extension;
use SilverStripe\Forms\FieldList;

class SiteSettingsExtension extends Extension
{
    private static $has_one =
    [
        'SecurityBackgroundImage' => Image::class
    ];

    private static $owns =
    [
        'SecurityBackgroundImage'
    ];

    /**
     * Update Fields
     * @return FieldList
     */
    public function updateCMSFields(FieldList $fields)
    {
        $fields->addFieldToTab(
            "Root.Security Templates",
            UploadField::create('SecurityBackgroundImage')
                ->setAllowedExtensions(['png', 'jpg', 'jgep', 'gif'])
                ->setFolderName('security/backgrounds')
        );
        return $fields;
    }

    /**
     * {@inheritdoc}
     */
    public function onAfterWrite()
    {
        if($this->owner->SecurityBackgroundImage() && $this->owner->SecurityBackgroundImage()->exists()) {
            $this->owner->SecurityBackgroundImage()->doPublish();
        }
    }
}
