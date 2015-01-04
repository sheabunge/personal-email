# Personal Email

* __Requires at least:__ WordPress 2.3 or later
* __Tested up to:__ WordPress 4.1
* __Stable version:__ [1.1](http://downloads.wordpress.org/plugin/personal-email.latest-stable.zip)
* __License:__ [MIT](http://opensource.org/licenses/mit-license.php)

Changes the default address that WordPress uses to send emails to the one set in Settings > General.

## Description

This light-weight plugin changes the default wordpress@sitename.com email address that WordPress uses to send emails to the one set in Settings > General. Also changes the sending name to the site title. There is no configuration, simply install and activate.

Visit the [plugin homepage](http://bungeshea.com/plugins/personal-email/), or download it from [WordPress.org](http://wordpress.org/extend/plugins/personal-email).

## Installation

1. Upload `personal-email.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Done!

## Frequently Asked Questions

### This plugin has no settings page! How do I tell it what email address to change to?
Simply navigate to the General Options page of your WordPress Dashboard *(Settings > General)*.

* The address in the **E-mail Address** field will be the reply-to address that emails will be sent from.
* The text in the **Site Title** field will be the name that appears next top the email address.

## Changelog

### 1.1
* Only change the address if the sender address actually is `wordpress@sitename`. Fixes compatibility with contact forms where the email is sent from the user.

### 1.0
* Initial release
