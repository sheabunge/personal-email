<?php

/**
 * Plugin Name: Personal Email
 * Plugin URI: http://bungeshea.com/plugins/personal-email/
 * Description: Changes the default address that WordPress uses to send emails to the one set in Settings > General.
 * Author: Shea Bunge
 * Author URI: http://bungeshea.com
 * Version: 1.1
 * Licence: GPLv3 or later
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

function personal_email_from( $from_email ) {

		/* Calculate the default address */
		$sitename = strtolower( $_SERVER['SERVER_NAME'] );

		if ( 'www.' === substr( $sitename, 0, 4 ) ) {
			$sitename = substr( $sitename, 4 );
		}

		/* Check that we don't effect emails not sent with the default address */

		if ( 'wordpress@' . $sitename === $from_email ) {
			$from_email = get_bloginfo( 'admin_email' );
		}

	return $from_email;
}

add_filter( 'wp_mail_from', 'personal_email_from' );

function personal_email_from_name( $from_name ) {
	if ( 'WordPress' === $from_name ) {
		$from_name = get_bloginfo( 'name' );
	}
	return $from_name;
}

add_filter( 'wp_mail_from_name', 'personal_email_from_name' );