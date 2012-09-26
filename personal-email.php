<?php

/**
 * Plugin Name: Personal Email
 * Plugin URI: http://wordpress.org/extend/plugins/personal-email/
 * Description: Changes the default address that WordPress uses to send emails to the one set in Settings > General.
 * Author: Shea Bunge
 * Author URI: http://bungeshea.com/plugins/personal-email/
 * Version: 1.0
 * Licence: GPLv3 or later
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

function personal_email_from( $email ) {
	return get_bloginfo( 'admin_email' );
}

add_filter( 'wp_mail_from', 'personal_email_from' );

function personal_email_from_name( $from_name ) {
	return get_bloginfo( 'name' );
}

add_filter( 'wp_mail_from_name', 'personal_email_from_name' );