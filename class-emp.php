<?php

class ibrahim_first_plugin{


    public function myscript(){
        wp_enqueue_style('myscriptoop', plugin_dir_path(__FILE__). 'css/admin.css');
    }

    public function myscriptregister(){
        add_action('admin_enqueue_scripts', array($this, 'myscript'));
    }

}

if(class_exists('ibrahim_first_plugin')){
    $plugin_newInfo = new ibrahim_first_plugin();

    $plugin_newInfo->myscriptregister(); 
}

?>