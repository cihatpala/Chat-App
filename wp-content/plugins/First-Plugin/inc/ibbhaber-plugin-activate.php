<?php
/** 
 * @package ibbhaber
*/

class IbbHaberPluginActivate{

    public static function activate() {
        flush_rewrite_rules();
    }
}
