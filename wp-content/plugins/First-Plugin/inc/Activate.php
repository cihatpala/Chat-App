<?php
/** 
 * @package ibbhaber
*/

namespace Incs;

class Activate{

    public static function activate() {
        flush_rewrite_rules();
    }
}