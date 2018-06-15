<?php
/**
 * Front-end Actions
 *
 * @package     EDD
 * @subpackage  Functions
 * @copyright   Copyright (c) 2018, Easy Digital Downloads, LLC
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.0.8.1
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

/**
 * Hooks EDD actions, when present in the $_GET superglobal. Every edd_action
 * present in $_GET is called using WordPress's do_action function. These
 * functions are called on init.
 *
 * @since 1.0
 * @return void
*/
function edd_get_actions() {
	$key = ! empty( $_GET['edd_action'] ) ? sanitize_key( $_GET['edd_action'] ) : false;
	if ( ! empty( $key ) ) {
		do_action( "edd_{$key}" , $_GET );
	}
}
add_action( 'init', 'edd_get_actions' );

/**
 * Hooks EDD actions, when present in the $_POST superglobal. Every edd_action
 * present in $_POST is called using WordPress's do_action function. These
 * functions are called on init.
 *
 * @since 1.0
 * @return void
*/
function edd_post_actions() {
	$key = ! empty( $_POST['edd_action'] ) ? sanitize_key( $_POST['edd_action'] ) : false;
	if ( ! empty( $key ) ) {
		do_action( "edd_{$key}", $_POST );
	}
}
add_action( 'init', 'edd_post_actions' );
