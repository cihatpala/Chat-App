<?php
/** 
 * @package ibbhaber
*/
/*
Plugin Name: Ibb Haber Eklenti
Description: İstanbul Büyükşehir Belediyesi'nin tüm resmi haberleri burada!
Version: v2.10.4
Author: Cihat PALA
Author URI: cihatpala.com
License: GPLv2 or latter
*/

defined('ABSPATH') or die('Hey, you can\t access this file, you silly human!');

if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
	require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}


/**
 * The code that runs during plugin activation
 * Eklenti etkinleştirmesi sırasında çalışan kod
 */
function activate_ibbhaber_eklenti(){
	Inc\Base\Activate::activate();
}
register_activation_hook(__FILE__,'activate_ibbhaber_eklenti');


/**
 * The code that runs during plugin deavtivation
 * Eklenti devre dışı bırakma sırasında çalışan kod
 */
function deactivate_ibbhaber_eklenti(){
	Inc\Base\Deactivate::deactivate();
}
register_deactivation_hook(__FILE__,'deactivate_ibbhaber_eklenti');


if(class_exists('Inc\\Init')){
	Inc\Init::register_services();
}