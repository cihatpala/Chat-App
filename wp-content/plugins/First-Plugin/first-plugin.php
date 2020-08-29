<?php
/** 
 * @package ibbhaber
*/
/*
Plugin Name: First-Plugin
Version: v1.0
Author: Cihat PALA
Author URI: cihatpala.com
License: GPLv2 or latter
*/

//if ( ! defined ( 'ABSPATH') ){
//	die;
//}

defined('ABSPATH') or die('Hey, you can\t access this file, you silly human!');

//if( !function_exists( 'add_action' ) ){
//	echo 'Hey, you can\t access this file, you silly human!';
//	exit;
//}

if( !class_exists('IbbHaberPlugin')){
	class IbbHaberPlugin{

		function register(){
			add_action('admin_enqueue_scripts', array($this,'enqueue'));
		}

		protected function create_post_type(){ //Construct içerisinde kullanıldığından protected olmasına rağmen dışardan erişilebilir.
			add_action( 'init', array($this, 'custom_post_type') );
		}

		static function custom_post_type(){
			register_post_type( 'book', ['public' => true, 'label' => 'Books'] );
		}

		function enqueue(){
			// enqueue all our scripts
			wp_enqueue_style( 'mypluginstyle', plugins_url( '/assets/mystyle.css', __FILE__  ));
			wp_enqueue_script( 'mypluginscript', plugins_url( '/assets/myscript.js', __FILE__  ));
		}

		function activate(){
			require_once plugin_dir_path( __FILE__ ) . 'inc/ibbhaber-plugin-activate.php';
		}
	}


	$ibbHaberPlugin = new IbbHaberPlugin();
	$ibbHaberPlugin -> register();


	//activation
	register_activation_hook(__FILE__,array($ibbHaberPlugin,'activate'));
	//add_action( 'init', 'function_name' );
	//deactivation
	require_once plugin_dir_path( __FILE__ ) . 'inc/ibbhaber-plugin-deactivate.php';
	register_deactivation_hook(__FILE__,array('IbbHaberPluginDeactivate','deactivate'));
}