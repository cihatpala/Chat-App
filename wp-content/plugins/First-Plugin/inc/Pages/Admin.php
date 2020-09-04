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
    public $subpages = array();

    public function __construct(){
        $this->settings = new SettingsApi();

        $this->pages = array( 
        
            array(
                'page_title' => 'Ibb Haber Pluginssss', 
                'menu_title' => 'Ibb Haber Plugin', 
                'capability' => 'manage_options', 
                'menu_slug' => 'ibbhaber_plugin', 
                'callback' => function () {echo '<h1> Cihat Pala Plugin</h1>';}, 
                'icon_url' => 'dashicons-store', 
                'position' => 110
            )
            );

            $this->subpages = array( 
                array(
                    'parent_slug' => 'ibbhaber_plugin', 
                    'page_title' => 'Custom Post Type', 
                    'menu_title' => 'CPT', 
                    'capability' => 'manage_options', 
                    'menu_slug' => 'ibbhaber_cpt', 
                    'callback' => function () {echo '<h1>Custom Post Types (CPT) Manager</h1>';}
                ),
                array(
                    'parent_slug' => 'ibbhaber_plugin', 
                    'page_title' => 'Custom Taxonomies', 
                    'menu_title' => 'Taxonomies', 
                    'capability' => 'manage_options', 
                    'menu_slug' => 'alecaddd_taxonomies', 
                    'callback' => function() { echo '<h1>Taxonomies Manager</h1>'; }
                ),
                array(
                    'parent_slug' => 'ibbhaber_plugin', 
                    'page_title' => 'Custom Widgets', 
                    'menu_title' => 'Widgets', 
                    'capability' => 'manage_options', 
                    'menu_slug' => 'ibbhaber_widgets', 
                    'callback' => function () {echo '<h1>Widget Manager</h1>';}
                )
                );
    }

	public function register(){
		$this->settings->addPages( $this->pages )->withSubPage( 'Dashboard' )->addSubPages( $this->subpages )->register();
	}
}
