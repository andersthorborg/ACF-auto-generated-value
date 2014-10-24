<?php

/*
Plugin Name: Advanced Custom Fields: Auto-generated value
Plugin URI: https://github.com/andersthorborg/
Description: Creates a hidden/readonly field in a repeater that gets a unique key, that won't change once it is saved. Ideal for user-generated forms. Includes option to hide the field from the user.
Version: 1.0.0
Author: Kindly
Author URI: http://kindly.dk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/




// 1. set text domain
// Reference: https://codex.wordpress.org/Function_Reference/load_plugin_textdomain
load_plugin_textdomain( 'acf-auto_generated_value', false, dirname( plugin_basename(__FILE__) ) . '/lang/' );




// 2. Include field type for ACF5
// $version = 5 and can be ignored until ACF6 exists
function include_field_types_auto_generated_value( $version ) {

	include_once('acf-auto_generated_value-v5.php');

}

add_action('acf/include_field_types', 'include_field_types_auto_generated_value');




// 3. Include field type for ACF4
function register_fields_auto_generated_value() {

	include_once('acf-auto_generated_value-v4.php');

}

add_action('acf/register_fields', 'register_fields_auto_generated_value');




?>