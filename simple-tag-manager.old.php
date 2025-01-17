<?php
/**
* Plugin Name: Simple Tag Manager
* Plugin URI: https://dansedmak.com/simple-tag-manager/
* Description: A simple plugin through which you can insert Google Tag Manager in the website.
* Version: 1.1
* Author: Daniel Sedmak
* Author URI: https://dansedmak.com/
* License: MIT
* Text Domain: stm-plugin-lang-f
* Domain Path: /languages
*/
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

// Including WP Essential Functions
require_once(ABSPATH .'wp-includes/pluggable.php');

// Including Plugin Files
include( plugin_dir_path( __FILE__ ) . '/settings.php');
include( plugin_dir_path( __FILE__ ) . '/caesar-cipher.php');

// Create the option page
function ecpt_stm_45t5dsfzxv22_zdx_35_option_page()
{
    add_options_page('Simple Tag Manager', 'Simple Tag Manager', 'administrator', 'simple-tag-manager', 'ecpt_stm_45t5dsfzxv22_zdx_35_page');
}

add_action('admin_menu', 'ecpt_stm_45t5dsfzxv22_zdx_35_option_page');
register_activation_hook( __FILE__, 'ecpt_stm_45t5dsfzxv22_zdx_35_activate' );
register_deactivation_hook( __FILE__, 'ecpt_stm_45t5dsfzxv22_zdx_35_deactivate' );
if(ecpt_stm_45t5dsfzxv22_zdx_35_stm_read("1") == "on"){ add_action('wp_head','ecpt_stm_45t5dsfzxv22_zdx_35_hook_head'); add_action('wp_footer','ecpt_stm_45t5dsfzxv22_zdx_35_hook_body'); }

// Activate the plugin
function ecpt_stm_45t5dsfzxv22_zdx_35_activate(){
	add_option( 'ecpt_stm_45t5dsfzxv22_zdx_35_stm_option_1', ecpt_stm_45t5dsfzxv22_zdx_35_stm_ciphrate("off"), '', 'yes' );
	add_option( 'ecpt_stm_45t5dsfzxv22_zdx_35_stm_option_2', ecpt_stm_45t5dsfzxv22_zdx_35_stm_ciphrate(""), '', 'yes' );
	add_option( 'ecpt_stm_45t5dsfzxv22_zdx_35_stm_option_3', ecpt_stm_45t5dsfzxv22_zdx_35_stm_ciphrate(""), '', 'yes' );
	add_option( 'ecpt_stm_45t5dsfzxv22_zdx_35_stm_option_4', ecpt_stm_45t5dsfzxv22_zdx_35_stm_ciphrate(""), '', 'yes' );
	add_option( 'ecpt_stm_45t5dsfzxv22_zdx_35_stm_option_5', ecpt_stm_45t5dsfzxv22_zdx_35_stm_ciphrate(""), '', 'yes' );
	add_option( 'ecpt_stm_45t5dsfzxv22_zdx_35_stm_option_5', ecpt_stm_45t5dsfzxv22_zdx_35_stm_ciphrate(""), '', 'yes' );
}

// Deactivate the plugin
function ecpt_stm_45t5dsfzxv22_zdx_35_deactivate(){
	delete_option( 'ecpt_stm_45t5dsfzxv22_zdx_35_stm_option_1');
	delete_option( 'ecpt_stm_45t5dsfzxv22_zdx_35_stm_option_2');
	delete_option( 'ecpt_stm_45t5dsfzxv22_zdx_35_stm_option_3');
	delete_option( 'ecpt_stm_45t5dsfzxv22_zdx_35_stm_option_4');
	delete_option( 'ecpt_stm_45t5dsfzxv22_zdx_35_stm_option_5');
	delete_option( 'ecpt_stm_45t5dsfzxv22_zdx_35_stm_option_6');
}

// Add the Tag Manager's script in the head
function ecpt_stm_45t5dsfzxv22_zdx_35_hook_head() {
	echo "<!-- Simple Tag Manager Plugin for WordPress (head)-->";
	echo "<!-- Google Tag Manager -->";
	echo ecpt_stm_45t5dsfzxv22_zdx_35_stm_read("2");
	echo "<!-- ### End ### -->";
	echo "<!-- Google Analytics -->";
	echo ecpt_stm_45t5dsfzxv22_zdx_35_stm_read("4");
	echo "<!-- ### End ### -->";
	echo "<!-- Custom Code -->";
	echo ecpt_stm_45t5dsfzxv22_zdx_35_stm_read("5");
	echo "<!-- ### End ### -->";
	echo "<!-- End of Simple Tag Manager -->";
}

// Add the Tag Manager's script in the body
function ecpt_stm_45t5dsfzxv22_zdx_35_hook_body() {
	echo "<!-- Simple Tag Manager Plugin for WordPress (footer)-->";
	echo "<!-- Google Tag Manager -->";
	echo ecpt_stm_45t5dsfzxv22_zdx_35_stm_read("3");
	echo "<!-- ### End ### -->";
	echo "<!-- Custom Code -->";
	echo ecpt_stm_45t5dsfzxv22_zdx_35_stm_read("6");
	echo "<!-- ### End ### -->";
	echo "<!-- End of Simple Tag Manager -->";
}

// Update the options
function ecpt_stm_45t5dsfzxv22_zdx_35_stm_update($x, $y){
	if(is_admin()){
	update_option( "ecpt_stm_45t5dsfzxv22_zdx_35_stm_option_$x", $y, 'yes' );
	}
}

// Ciphrate text
function ecpt_stm_45t5dsfzxv22_zdx_35_stm_ciphrate($x){
	$cipher = new KKiernan\CaesarCipher();
	return $cipher->encrypt(htmlentities($x), 8);
}


// Read the options
function ecpt_stm_45t5dsfzxv22_zdx_35_stm_read($x){
	$cipher = new KKiernan\CaesarCipher();
	return html_entity_decode($cipher->decrypt(get_option("ecpt_stm_45t5dsfzxv22_zdx_35_stm_option_$x"), 8));
}

// When the form is submitted ...
if ( ! isset( $_POST['stmx_form'] ) || ! wp_verify_nonce( $_POST['stmx_form'], 'stmx_frm1')) {
} else {
   if(wp_verify_nonce( $_POST['stmx_form'], 'stmx_frm1' )){
		ecpt_stm_45t5dsfzxv22_zdx_35_stm_update("1", sanitize_text_field(ecpt_stm_45t5dsfzxv22_zdx_35_stm_ciphrate($_POST['opt1'])));
		ecpt_stm_45t5dsfzxv22_zdx_35_stm_update("2", sanitize_text_field(ecpt_stm_45t5dsfzxv22_zdx_35_stm_ciphrate($_POST['opt2'])));
		ecpt_stm_45t5dsfzxv22_zdx_35_stm_update("3", sanitize_text_field(ecpt_stm_45t5dsfzxv22_zdx_35_stm_ciphrate($_POST['opt3'])));
		ecpt_stm_45t5dsfzxv22_zdx_35_stm_update("4", sanitize_text_field(ecpt_stm_45t5dsfzxv22_zdx_35_stm_ciphrate($_POST['opt4'])));
		ecpt_stm_45t5dsfzxv22_zdx_35_stm_update("5", sanitize_text_field(ecpt_stm_45t5dsfzxv22_zdx_35_stm_ciphrate($_POST['opt5'])));
		ecpt_stm_45t5dsfzxv22_zdx_35_stm_update("6", sanitize_text_field(ecpt_stm_45t5dsfzxv22_zdx_35_stm_ciphrate($_POST['opt6'])));
	}
}

?>
