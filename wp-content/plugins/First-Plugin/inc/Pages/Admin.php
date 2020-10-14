<?php
/**
 * @package ibbhaber
 */

namespace Inc\Pages;

use \Inc\Api\SettingsApi;
use \Inc\Base\BaseController;
use \Inc\Api\Callbacks\AdminCallbacks;
use \Inc\Api\Callbacks\ManagerCallbacks;

class Admin extends BaseController{

    public $settings;
    public $callbacks;
    public $pages = array();
    public $subpages = array();

	public function register(){
        $this->settings = new SettingsApi();

        $this->callbacks = new AdminCallbacks();
        $this->callbacks_mngr = new ManagerCallbacks();

        $this->setPages();

        $this->setSubpages();

        $this->setSettings();
        $this->setSections();
        $this->setFields();

		$this->settings->addPages( $this->pages )->withSubPage( 'Dashboard' )->addSubPages( $this->subpages )->register();
    }
    
    public function setPages(){

        $this->pages = array( 
        
            array(
                'page_title' => 'Ibb Haber Pluginssss', 
                'menu_title' => 'Ibb Haber Plugin', 
                'capability' => 'manage_options', 
                'menu_slug' => 'ibbhaber_plugin', 
                'callback' => array( $this->callbacks, 'adminDashboard'), 
                'icon_url' => 'dashicons-store', 
                'position' => 110
            )
            );
    }

    public function setSubpages(){

        $this->subpages = array( 
            array(
                'parent_slug' => 'ibbhaber_plugin', 
                'page_title' => 'Custom Post Type', 
                'menu_title' => 'CPT', 
                'capability' => 'manage_options', 
                'menu_slug' => 'ibbhaber_cpt', 
                'callback' => array( $this->callbacks, 'adminCpt')
            ),
            array(
                'parent_slug' => 'ibbhaber_plugin', 
                'page_title' => 'Custom Taxonomies', 
                'menu_title' => 'Taxonomies', 
                'capability' => 'manage_options', 
                'menu_slug' => 'alecaddd_taxonomies', 
                'callback' => array( $this->callbacks, 'adminTaxonomy')
            ),
            array(
                'parent_slug' => 'ibbhaber_plugin', 
                'page_title' => 'Custom Widgets', 
                'menu_title' => 'Widgets', 
                'capability' => 'manage_options', 
                'menu_slug' => 'ibbhaber_widgets', 
                'callback' => array( $this->callbacks, 'adminWidget')
            )
            );
    }

    public function setSettings(){

        $args = array();
        foreach ($this->managers as $key => $value) {
            $args[] = array(
                'option_group' =>'ibbhaber_plugin_settings',
                'option_name' => $key,
                'callback' => array($this->callbacks, 'checkboxSanitize')
            );
        }

        $this->settings->setSettings($args);
    }

    public function setSections(){
        $args = array(
            array(
                'id' =>'ibbhaber_admin_index',
                'title' =>'Settings Manager',
                'callback' => array($this->callbacks_mngr, 'adminSectionManager'),
                'page' => 'ibbhaber_plugin'
            )
        );

        $this->settings->setSections($args);
    }

    public function setFields(){

        $args = array();
        foreach ($this->managers as $key => $value) {
            $args[] = array(
                'id' => $key,
                'title' =>$value,
                'callback' => array($this->callbacks_mngr, 'checkboxField'),
                'page' => 'ibbhaber_plugin',
                'section' =>'ibbhaber_admin_index',
                'args'=>array(
                    'label_for' => $key,
                    'class' => 'ui-toggle'
                )
            );
        }
        $this->settings->setFields($args);
    }
}
