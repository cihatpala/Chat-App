<?php 
/**
 * @package  ibbhaber
 */

 namespace Inc\Api\Callbacks;

 use Inc\Base\BaseController;

 class NewsCallbacks extends BaseController {
     public function newsUsingPage(){
         return require_once("$this->plugin_path/templates/newsusingpage.php");
     }

     public function newsMainPage(){
        return require_once("$this->plugin_path/templates/newsmainpage.php");
    }
 }