<?php
/**
 * @package ibbhaber
 */

 namespace Inc\Api\Callbacks;

 use Inc\Base\BaseController;

 class ManagerCallbacks extends BaseController{

    public function chechboxSanitize( $input){
        $output = array();
        
        foreach ($managers as $key => $value) {
            $output[$key] = isset($input[$key]) ? true : false;
        }
        
        return $output;
    }

    public function adminSectionManager( $input){
        echo 'Aşağıdaki listeden onay kutularını etkinleştirerek bu Eklentinin Bölümleri ve Özelliklerini yönetebilirsiniz.';
    }

    public function checkboxField($args){
        $name = $args['label_for'];
        $classes = $args['class'];
        $option_name = $args['option_name'];
        $checkbox = get_option($option_name);

        $checked = isset($checkbox[$name]) ? ($checkbox[$name] ? true : false) : false;

        echo '<div class="' . $classes . '">
        <input type="checkbox" id="' . $name . '" name="' . $option_name. '['.$name . ']" value="1" 
        class="" ' .  ($checked ? 'checked' : '') . '>
        <label for="' . $name . '">
        <div></div>
        </label>
        </div>';
    }

 }