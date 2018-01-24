=== Personal Email ===
Contributors: bungeshea
Donate link: https://bungeshea.com/donate/
Tags: email, personal, mail
Requires at least: 2.3
Tested up to: 4.9.2
Stable tag: 1.1
License: MIT
License URI: https://opensource.org/licenses/MIT

Changes the default address that WordPress uses to send emails to the one set in Settings > General.

== Description ==

This light-weight plugin changes the default wordpress@sitename.com email address that WordPress uses to send emails to the one set in Settings > General. Also changes the sending name to the site title. There is no configuration, simply install and activate.

Visit the [plugin homepage](https://bungeshea.com/plugins/personal-email/), or contribute to its development on [GitHub](https://github.com/sheabunge/personal-email).

== Installation ==

1. Upload `personal-email.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Done!

== Frequently Asked Questions ==

= This plugin has no settings page! How do I tell it what email address to change to? =
Simply navigate to the General Options page of your WordPress Dashboard *(Settings > General)*.

* The address in the **E-mail Address** field will be the reply-to address that emails will be sent from.
* The text in the **Site Title** field will be the name that appears next top the email address.

== Changelog ==

= 1.1 =
* Only change the address if the sender address actually is `wordpress@sitename`.

= 1.0 =
* Initial release

== Upgrade Notice ==

= 1.1 =
Only change the default address, not custom emails. Fixes compatibility with contact forms where the email is sent from the user.
