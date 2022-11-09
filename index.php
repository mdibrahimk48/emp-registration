<?php

/*

Plugin Name: Registration Form
Plugin URL: https://ibrahimkhalil.info/
Description: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil ad unde commodi nam assumenda, neque quasi exercitationem dolores quo, asperiores suscipit, aliquam obcaecati explicabo facere. Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, ut tempore. Qui itaque fuga assumenda!
Version: 0.1
Author: Ibrahim Khalil
Author URI: https://www.facebook.com/mdibrahimk48

*/

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

?>