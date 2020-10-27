<?php
/** 
 * @package ibbhaber
*/

namespace Inc\Base;

class Activate{

    public static function activate() {
        flush_rewrite_rules();
        $default = array();

        if( ! get_option('ibbhaber_plugin' )){   
            update_option('ibbhaber_plugin', $default);
        }

        delete_option($option);

        
        if( ! get_option('ibbhaber_plugin_tax' )){   
            update_option('ibbhaber_plugin_tax', $default);
        }




    }
}