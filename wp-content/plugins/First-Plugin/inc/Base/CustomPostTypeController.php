<?php
/**
 * @package ibbhaber
 */

namespace Inc\Base;

use \Inc\Api\SettingsApi;
use \Inc\Base\BaseController;
use \Inc\Api\Callbacks\AdminCallbacks;
class CustomPostTypeController extends BaseController{
    public $callbacks;

    public $subpages = array();

    public function register(){

        $option = get_option('ibbhaber_plugin');
        $activated = isset($option['cpt_manager']) ? $option['cpt_manager'] : false;

        if( ! $activated ) return;

        $this->settings = new SettingsApi();

        $this->callbacks = new AdminCallbacks();

        $this->setSubpages();

        $this->settings->addSubPages( $this->subpages )->register();

        add_action('init',array($this,'activate'));


    }

    public function activate(){
        register_post_type('ibbhaber_products',
            array(
                'labels' => array(
                    'name' => 'Products',
                    'singular_name' => 'Product'
                ),
                'public' => true,
                'has_archive' => true,
            )
        );
    }

    public function setSubpages(){

        $this->subpages = array( 
            array(
                'parent_slug' => 'ibbhaber_plugin', 
                'page_title' => 'Custom Post Type', 
                'menu_title' => 'CPT Manager', 
                'capability' => 'manage_options', 
                'menu_slug' => 'ibbhaber_cpt', 
                'callback' => array( $this->callbacks, 'adminCpt')
            ));
    }

}