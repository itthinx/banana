<?php
/**
 * Plugin Name: Banana
 * Plugin URI: http://www.itthinx.com/
 * Description: Cookie tester.
 * Version: 1.0.0
 * Author: itthinx
 * Author URI: http://www.itthinx.com
 * Donate-Link: http://www.itthinx.com
 * License: GPLv3
 */

$file = '';
$line = '';
if ( headers_sent( $file, $line ) ) {
	error_log( 'Cannot set the banana cookie because headers were already sent.' );
	error_log( 'File: ' . $file );
	error_log( 'Line: ' . $line );
} else {
	setcookie( 'banana', date( 'Y-m-d H:i:s' ) );
}
