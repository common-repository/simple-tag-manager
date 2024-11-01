<?php
/**
* Plugin Name: Simple Tag Manager
* Plugin URI: https://dansedmak.com/simple-tag-manager/
* Description: Easily and automatically add Google Tag Manager and Google Analytics in your website.
* Version: 1.2
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
    if(ecpt_stm_45t5dsfzxv22_zdx_35_stm_read("1") == ""){
	add_option( 'ecpt_stm_45t5dsfzxv22_zdx_35_stm_option_1', ecpt_stm_45t5dsfzxv22_zdx_35_stm_ciphrate("off"), '', 'yes' );
    }
    if(ecpt_stm_45t5dsfzxv22_zdx_35_stm_read("2") == ""){
	add_option( 'ecpt_stm_45t5dsfzxv22_zdx_35_stm_option_2', ecpt_stm_45t5dsfzxv22_zdx_35_stm_ciphrate(""), '', 'yes' );
    }
    if(ecpt_stm_45t5dsfzxv22_zdx_35_stm_read("3") == ""){
	add_option( 'ecpt_stm_45t5dsfzxv22_zdx_35_stm_option_3', ecpt_stm_45t5dsfzxv22_zdx_35_stm_ciphrate(""), '', 'yes' );
    }
	if(ecpt_stm_45t5dsfzxv22_zdx_35_stm_read("4") == ""){
        add_option( 'ecpt_stm_45t5dsfzxv22_zdx_35_stm_option_4', ecpt_stm_45t5dsfzxv22_zdx_35_stm_ciphrate(""), '', 'yes' );
    }
	if(ecpt_stm_45t5dsfzxv22_zdx_35_stm_read("5") == ""){
        add_option( 'ecpt_stm_45t5dsfzxv22_zdx_35_stm_option_5', ecpt_stm_45t5dsfzxv22_zdx_35_stm_ciphrate(""), '', 'yes' );
    }
	if(ecpt_stm_45t5dsfzxv22_zdx_35_stm_read("6") == ""){
        add_option( 'ecpt_stm_45t5dsfzxv22_zdx_35_stm_option_6', ecpt_stm_45t5dsfzxv22_zdx_35_stm_ciphrate(""), '', 'yes' );
    }
    if(ecpt_stm_45t5dsfzxv22_zdx_35_stm_read("7") == ""){
        add_option( 'ecpt_stm_45t5dsfzxv22_zdx_35_stm_option_7', ecpt_stm_45t5dsfzxv22_zdx_35_stm_ciphrate(""), '', 'yes' );
    }
    if(ecpt_stm_45t5dsfzxv22_zdx_35_stm_read("8") == ""){
        add_option( 'ecpt_stm_45t5dsfzxv22_zdx_35_stm_option_8', ecpt_stm_45t5dsfzxv22_zdx_35_stm_ciphrate(""), '', 'yes' );
    }
    if(ecpt_stm_45t5dsfzxv22_zdx_35_stm_read("9") == ""){
        add_option( 'ecpt_stm_45t5dsfzxv22_zdx_35_stm_option_9', ecpt_stm_45t5dsfzxv22_zdx_35_stm_ciphrate(""), '', 'yes' );
    }
}

// Deactivate the plugin
function ecpt_stm_45t5dsfzxv22_zdx_35_deactivate(){
    /*
	delete_option( 'ecpt_stm_45t5dsfzxv22_zdx_35_stm_option_1');
	delete_option( 'ecpt_stm_45t5dsfzxv22_zdx_35_stm_option_2');
	delete_option( 'ecpt_stm_45t5dsfzxv22_zdx_35_stm_option_3');
	delete_option( 'ecpt_stm_45t5dsfzxv22_zdx_35_stm_option_4');
	delete_option( 'ecpt_stm_45t5dsfzxv22_zdx_35_stm_option_5');
	delete_option( 'ecpt_stm_45t5dsfzxv22_zdx_35_stm_option_6');
    delete_option( 'ecpt_stm_45t5dsfzxv22_zdx_35_stm_option_7');
    delete_option( 'ecpt_stm_45t5dsfzxv22_zdx_35_stm_option_8');
    delete_option( 'ecpt_stm_45t5dsfzxv22_zdx_35_stm_option_9');
    */
}

// Add the Tag Manager's script in the head
function ecpt_stm_45t5dsfzxv22_zdx_35_hook_head() {
	echo "<!-- Simple Tag Manager Plugin for WordPress (head)-->";
    if(strlen(ecpt_stm_45t5dsfzxv22_zdx_35_stm_read("8"))>2){
	echo "<!-- Google Tag Manager (Easy) -->";
    echo "<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','".ecpt_stm_45t5dsfzxv22_zdx_35_stm_read("8")."');</script>";
	echo "<!-- ### End ### -->";
    }
    echo "<!-- Google Tag Manager -->";
	echo ecpt_stm_45t5dsfzxv22_zdx_35_stm_read("2");
	echo "<!-- ### End ### -->";
    if(strlen(ecpt_stm_45t5dsfzxv22_zdx_35_stm_read("9"))>2){
    echo "<!-- Google Analytics (Easy) -->";
    echo "<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', '".ecpt_stm_45t5dsfzxv22_zdx_35_stm_read("9")."', 'auto');
  ga('send', 'pageview');

</script>";
	echo "<!-- ### End ### -->";
    }
	echo "<!-- Google Analytics -->";
	echo ecpt_stm_45t5dsfzxv22_zdx_35_stm_read("4");
	echo "<!-- ### End ### -->";
	echo "<!-- Custom Code -->";
	echo ecpt_stm_45t5dsfzxv22_zdx_35_stm_read("7");
	echo "<!-- ### End ### -->";
	echo "<!-- End of Simple Tag Manager -->";
}

// Add the Tag Manager's script in the body
function ecpt_stm_45t5dsfzxv22_zdx_35_hook_body() {
	echo "<!-- Simple Tag Manager Plugin for WordPress (footer)-->";
    echo "<!-- Google Tag Manager (Easy) -->";
    echo "<noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=".ecpt_stm_45t5dsfzxv22_zdx_35_stm_read("8")."\"
height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>";
    echo "<!-- ### End ### -->";
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
        ecpt_stm_45t5dsfzxv22_zdx_35_stm_update("7", sanitize_text_field(ecpt_stm_45t5dsfzxv22_zdx_35_stm_ciphrate($_POST['opt7'])));
        ecpt_stm_45t5dsfzxv22_zdx_35_stm_update("8", sanitize_text_field(ecpt_stm_45t5dsfzxv22_zdx_35_stm_ciphrate($_POST['opt8'])));
        ecpt_stm_45t5dsfzxv22_zdx_35_stm_update("9", sanitize_text_field(ecpt_stm_45t5dsfzxv22_zdx_35_stm_ciphrate($_POST['opt9'])));
	}
}

?>
