<?php
/**
 * @package ibbhaber
 */

 namespace Inc\Api\Callbacks;

 use Inc\Base\BaseController;

 class AdminCallbacks extends BaseController{

    public function adminDashboard(){
        return require_once("$this->plugin_path/templates/admin.php");
    }
    public function adminCpt(){
        return require_once("$this->plugin_path/templates/cpt.php");
    }
    public function adminTaxonomy(){
        return require_once("$this->plugin_path/templates/taxonomy.php");
    }
    public function adminWidget(){
        return require_once("$this->plugin_path/templates/widget.php");
    }
    public function adminTestimonial(){
        echo "<h1><b>Burası TESTIMONIAL</b></h1>";
    }
    
    // public function ibbhaberOptionsGroup( $input){
    //     return $input;
    // }
    // public function ibbhaberAdminSection( $input){
    //     echo 'Harika bir başlangıç!';
    // }

    public function ibbhaberTextExample( $input){
        $value= esc_attr(get_option('text_example', $default));
        echo '<input typye="text" class="regular_text" name="text_example" value="'.$value.'" placeholder="Bir şeyler Yaz.">';
    }

    public function ibbhaberFirstName( $input){
        $value= esc_attr(get_option('first_name', $default));
        echo '<input typye="text" class="regular_text" name="text_example" value="'.$value.'" placeholder="Adınızı Yazınız.">';
    }

 }