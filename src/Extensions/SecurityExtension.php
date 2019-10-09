<?php

namespace Feejin\SecurityTemplates\Extensions;

use SilverStripe\View\SSViewer;
use SilverStripe\Core\Extension;
use SilverStripe\Security\Security;
use SilverStripe\Core\Config\Config;

class SecurityExtension extends Extension
{
    /**
     * @var array
     * @config
     */
    private static $excluded_actions = [
        'index',
        'ping'
    ];

    public function beforeCallActionHandler()
    {
        $config = Config::inst();
        /** @var Security $owner */
        $owner = $this->getOwner();
        $action = $owner->getAction();

        $allowedActions = $config->get(Security::class, 'allowed_actions');
        $excludedActions = $config->get(self::class, 'excluded_actions');

        $themeActions = array_diff($allowedActions, $excludedActions);
        if (in_array($action, $themeActions)) {
            $themes = SSViewer::get_themes();
            $securityTheme = 'feejin/silverstripe-securitytemplates:securitytemplates';

            // If $public is present in the themes array, we want to insert after it
            $public = array_search('$public', $themes);
            if ($public !== false) {
                array_splice($themes, $public + 1, 0, [$securityTheme]);
            } else {
                array_unshift($themes, $securityTheme);
            }

            SSViewer::set_themes($themes);
        }
    }
}
