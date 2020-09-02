<?php
/**
 * @package ibbhaber
 */

namespace Inc\Pages;

use \Inc\Base\BaseController;
use \Inc\Api\SettingsApi;
class Admin extends BaseController{

    public $settings;
    public $pages = array();

    public function __construct(){
        $this->settings = new SettingsApi();

        $this->pages = array ( 
        
            array(
                'page_title' => 'Ibb Haber Pluginssss', 
                'menu_title' => 'Ibb Haber Plugin... by Cihat Pala', 
                'capability' => 'manage_options', 
                'menu_slug' => 'ibbhaber-plugin', 
                'callback' => function () {echo '<h1> Cihat Pala Plugin </h1>';}, 
                'icon_url' => 'dashicons-store', 
                'position' => 110
            ),

            array(
                'page_title' => 'Bu da bir Eklenti', 
                'menu_title' => 'BudaEklenti', 
                'capability' => 'manage_options', 
                'menu_slug' => 'test-plugin', 
                'callback' => function () {echo '<h1> External </h1>';}, 
                'icon_url' => 'dashicons-external', 
                'position' => 9
            )

            );
    }

    public function register(){
        // add_action('admin_menu', array($this,'add_admin_pages'));
        $this->settings->addPages( $this->pages )->register();
    }
}
