<?php
/** 
 * @package ibbhaber
*/

namespace Inc\Base;

class Activate{

    public static function activate() {
        flush_rewrite_rules();

        if(get_option('ibbhaber_plugin')){
            return;
        }

        $default = array();
        update_option('ibbhaber_plugin', $default);
    }
}