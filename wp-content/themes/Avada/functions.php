<?php
/**
 * Extra files & functions are hooked here.
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package Avada
 * @subpackage Core
 * @since 1.0
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

if ( ! defined( 'AVADA_VERSION' ) ) {
	define( 'AVADA_VERSION', '7.11.2' );
}

if ( ! defined( 'AVADA_MIN_PHP_VER_REQUIRED' ) ) {
	define( 'AVADA_MIN_PHP_VER_REQUIRED', '5.6' );
}

if ( ! defined( 'AVADA_MIN_WP_VER_REQUIRED' ) ) {
	define( 'AVADA_MIN_WP_VER_REQUIRED', '4.9' );
}

// Developer mode.
if ( ! defined( 'AVADA_DEV_MODE' ) ) {
	define( 'AVADA_DEV_MODE', false );
}

/**
 * Compatibility check.
 *
 * Check that the site meets the minimum requirements for the theme before proceeding.
 *
 * @since 6.0
 */
if ( version_compare( $GLOBALS['wp_version'], AVADA_MIN_WP_VER_REQUIRED, '<' ) || version_compare( PHP_VERSION, AVADA_MIN_PHP_VER_REQUIRED, '<' ) ) {
	require_once get_template_directory() . '/includes/bootstrap-compat.php';
	return;
}

/**
 * Bootstrap the theme.
 *
 * @since 6.0
 */
require_once get_template_directory() . '/includes/bootstrap.php';

/* Omit closing PHP tag to avoid "Headers already sent" issues. */

function image_popup_idc(){
?>
<script>
 const loginPopup = document.querySelector(".image-popup");
 const close = document.querySelector(".close-button");
	const showPopup = document.querySelector("#open-popup");
showPopup.addEventListener("click",function(){
 visiblePopup();
 })
 
 function visiblePopup(){
 const timeLimit = 1 // seconds before popup;
 let i=0;
 const timer = setInterval(function(){
 i++;
 if(i == timeLimit){
 clearInterval(timer);
 loginPopup.classList.add("visible");
 }
 console.log(i)
 },1000);
 }
 close.addEventListener("click",function(){
 loginPopup.classList.remove("visible");
 })
</script>
<?php
}
add_action('wp_footer', 'image_popup_idc');
