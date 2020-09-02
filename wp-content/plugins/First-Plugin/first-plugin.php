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

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.
You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
Copyright 2005-2015 Automattic, Inc.
*/

defined('ABSPATH') or die('Hey, you can\t access this file, you silly human!');

if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
	require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}




/**
 * The code that runs during plugin activation
 */


function activate_ibbhaber_plugin(){
	Inc\Base\Activate::activate();
}
register_activation_hook(__FILE__,'activate_ibbhaber_plugin');
/**
 * The code that runs during plugin deavtivation
 */
function deactivate_ibbhaber_plugin(){
	Inc\Base\Deactivate::deactivate();
}
register_deactivation_hook(__FILE__,'deactivate_ibbhaber_plugin');




if(class_exists('Inc\\Init')){
	Inc\Init::register_services();
}