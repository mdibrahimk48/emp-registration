<?php

class  ibrahim_first_plugin_script{

    function __construct(){
        add_action('init',array($this,'ibrahim_emp'));
    }


    public function myscript(){
        wp_enqueue_style('myscriptoop', plugin_dir_path(__FILE__). 'css/admin.css');
    }

    function myscriptregister(){
        add_action('admin_enqueue_scripts', array($this, 'myscript'));
    }


    function activate(){
       flush_rewrite_rules(); 
    }
    function deactivate(){
        flush_rewrite_rules();   
    } 

    function ibrahim_emp(){
        register_post_type('ibrahim_emp',[
            'public'    => true,
            'label'     => "Emp Info"
        ]);
    }

}

if(class_exists('ibrahim_first_plugin_script')){
    $plugin_newInfo = new ibrahim_first_plugin_script();

    $plugin_newInfo->myscriptregister();
}

register_activation_hook(__FILE__, array($plugin_newInfo,'activate'));
register_deactivation_hook(__FILE__, array($plugin_newInfo,'deactivate'));

?>