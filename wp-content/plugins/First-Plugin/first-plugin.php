<?php
/** 
 * @package AlecaddPlugin
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

class IbbHaberPlugin{

	//Public
		//Her yerden erişilebilir.

	//Protected
		//Yalnızca class içerisinden erişim.

	//Private





	function __construct(){
		//$this->print_stuff();
	}

	protected function create_post_type(){ //Construct içerisinde kullanıldığından protected olmasına rağmen dışardan erişilebilir.
		add_action( 'init', array($this, 'custom_post_type') );
	}

	function register(){
		add_action('admin_enqueue_scripts', array($this,'enqueue'));
	}

	function activate(){
		$this->custom_post_type();
		flush_rewrite_rules();
	}

	function deactivate(){
		flush_rewrite_rules();
	}

	static function custom_post_type(){
		register_post_type( 'book', ['public' => true, 'label' => 'Books'] );
	}

	function enqueue(){
		// enqueue all our scripts
		wp_enqueue_style( 'mypluginstyle', plugins_url( '/assets/mystyle.css', __FILE__  ));
		wp_enqueue_script( 'mypluginscript', plugins_url( '/assets/myscript.js', __FILE__  ));
	}

	private function print_stuff(){
		var_dump(['test Cihat']);
	}
}

class SecondClass extends IbbHaberPlugin{

	function __construct(){
		//$this->print_stuff();
	}

	function register_post_type(){
		$this -> create_post_type();
	}
}



if(class_exists('IbbHaberPlugin')){
	$ibbHaberPlugin = new IbbHaberPlugin('IBB Haber Plugin Başlatıldı');
	$ibbHaberPlugin -> register();
}


$secondClass = new SecondClass();
$secondClass -> register_post_type();

//activation
register_activation_hook(__FILE__,array($ibbHaberPlugin,'activate'));
//add_action( 'init', 'function_name' );
//deactivation
register_deactivation_hook(__FILE__,array($ibbHaberPlugin,'deactivate'));
