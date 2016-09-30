<?php

/**
 * Plugin Name: Personal Email
 * Plugin URI: https://bungeshea.com/plugins/personal-email/
 * Description: Changes the default address that WordPress uses to send emails to the one set in Settings > General.
 * Author: Shea Bunge
 * Author URI: https://bungeshea.com
 * Version: 1.1
 * Licence: MIT
 * License URI: https://opensource.org/licenses/MIT
 */

/**
 * Changes the default address that WordPress uses to send emails to the one set in Settings > General.
 *
 * @package Personal_Email
 * @version 1.1
 * @author  Shea Bunge <https://bungeshea.com>
 * @license https://opensource.org/licenses/MIT MIT
 */

/**
 * Change the default from address from
 * wordpress@domain to the admin email address.
 *
 * @since 1.1 Only alter the address if the default one is being used
 * @since 1.0
 *
 * @param string $from_email The current from address
 *
 * @return string The new from address
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

/**
 * Alter the default name WordPress sends emails from.
 *
 * @since 1.1 Only alter the name if the default one is being used
 * @since 1.0
 *
 * @param string $from_name The current from name used to send emails
 *
 * @return string The new from name used to send emails
 */
function personal_email_from_name( $from_name ) {
	if ( 'WordPress' === $from_name ) {
		$from_name = get_bloginfo( 'name' );
	}
	return $from_name;
}

add_filter( 'wp_mail_from_name', 'personal_email_from_name' );
