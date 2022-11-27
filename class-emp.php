<?php

class ibrahim_first_plugin{

    function __construct(){
        add_action('init',array($this,'ibrahim_emp'));
    }

    function activate(){
       flush_rewrite_rules(); 
    }
    function deactivate(){
        
    }
    function uninstall(){
        
    }


    function ibrahim_emp(){
        register_post_type('ibrahim_emp',[
            'public'    => true,
            'label'     => "Emp Info"
        ]);
    }


}

if(class_exists('ibrahim_first_plugin')){
    $plugin_newInfo = new ibrahim_first_plugin('');
}

register_activation_hook(__FILE__, array($plugin_newInfo,'activate'));
register_deactivation_hook(__FILE__, array($plugin_newInfo,'deactivate'));

?>