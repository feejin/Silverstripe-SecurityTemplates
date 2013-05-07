#SilverStripe Security Templates#

Standalone templates for SilverStripe 3.x login and password reset pages, designed to mirror the design of the CMS.

By Colin Richardson & Loz Calver - [Bigfork Ltd](http://www.bigfork.co.uk/).

##Installation:##

Download and unzip, rename folder to SecurityTemplates and drop it into your SilverStripe root directory, run http://yoursite.url/dev/build and you're done.

##Customising##

* You can change colours with LESS variables in /less/login.less. Yeah!
* Replace logo.png in /images/ with your own if you fancy it. Max size is 24 x 24.
* Replacing the logo will also change the admin logo, comment out the "LeftAndMain::require" part of _config.php if you don't want this to happen
* Help link in the CMS now hidden through CSS, see above for reinstating