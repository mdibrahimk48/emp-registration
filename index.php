<?php

/*

Plugin Name:        Employee Info
Plugin URL:         https://ibrahimkhalil.info/
Description:        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil ad unde commodi nam assumenda, neque quasi exercitationem dolores quo, asperiores suscipit, aliquam obcaecati explicabo facere. Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, ut tempore. Qui itaque fuga assumenda!
Version:            0.1
Author:             Ibrahim Khalil
Author URI:         https://www.facebook.com/mdibrahimk48
Text Domain:        ibrahim-plugin

*/

define(__FILE__, 'ABSPATH') or die('You are not human!');

require_once( plugin_dir_path( __FILE__ ) . 'class-emp.php' );
require_once( plugin_dir_path( __FILE__ ) . 'class-scripts.php' );


// File Directory
/*
if(!function_exists('adminscripts')){
    function adminscripts(){
        wp_enqueue_style('ik-css', plugin_dir_path( __FILE__ ) .'css/plugin-emp.css');
        wp_enqueue_script('ik-script', plugin_dir_path( __FILE__ ) .'js/plugin-emp.js');
    }
}
add_action('admin_enqueue_scripts', 'adminscripts');
*/


// File Directory in FrontEnd
/*
if(!function_exists('mywpstyle')){
    wp_enqueue_style('ik-front-css', plugin_dir_path( __FILE__ ) .'css/plugin-emp.css');
    wp_enqueue_script('ik-front-script', plugin_dir_path( __FILE__ ) .'js/plugin-emp.js');
}
*/


/* Short Code -------------------------------------------------------------------------
    //ShortCode Start
    add_shortcode('show', 'ik_address');

    if(!function_exists('ik_address')){

        function ik_address($atts=[], $content=null){

            // $output = "Ibrahim Khalil </br>";
            // $output.="01517816814";

            //Attribute Pass
            extract(shortcode_atts(

                array(
                    'style' => 'color:yellow',
                    'class' => "ik_class",
                    'title' => 'WP Dev'
                ),$atts

            ));

            $content = do_shortcode($content);

            return '<span title="'.$title.'" style="'.$style.'"> '.$content.' </span>';

        }
    }
    //ShortCode End


    //ShortCode Start
    add_shortcode('user-form', 'getUserForm');

    if(!function_exists('getUserForm')){
        function getUserForm(){
            ob_start();
            ?>

            <h2>HTML Forms</h2>
            <form action="/action_page.php">
                <label for="fname">First name:</label><br>
                <input type="text" id="fname" name="fname" value="John"><br>
                <label for="lname">Last name:</label><br>
                <input type="text" id="lname" name="lname" value="Doe"><br><br>
                <input type="submit" value="Submit">
            </form> 

            <?php
            $output = ob_get_clean();
            return $output;
        }
    }

    //ShortCode End
*/

?>