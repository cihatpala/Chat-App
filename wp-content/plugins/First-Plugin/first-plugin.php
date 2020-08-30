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


		public $plugin;

		function __construct(){
			$this->plugin = plugin_basename( __FILE__ ); 
		}

		function register(){
			add_action('admin_enqueue_scripts', array($this,'enqueue'));

			add_action('admin_menu', array($this,'add_admin_pages'));

			add_filter("plugin_action_links_$this->plugin", array($this, 'settings_link'));
		}

		public function settings_link($links){
			//add custom settings link
			$settings_link = '<a href="options-general.php?page=ibbhaber-plugin">Settings</a>';
			array_push($links, $settings_link);
			return $links;
		}

		public function add_admin_pages(){
			add_menu_page('Ibb Haber Plugin', 'IbbHaber', 'manage_options', 'ibbhaber-plugin', array($this,'admin_index'), 'dashicons-store', 110 );
		}
		public function admin_index(){
			require_once plugin_dir_path( __FILE__ ) . 'templates/admin.php';
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