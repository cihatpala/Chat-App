<?php
/** 
 * @package ibbhaber
*/

class IbbHaberPluginDeactivate{

    public static function deactivate() {
        flush_rewrite_rules();
    }
}