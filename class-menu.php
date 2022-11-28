<?php

class menu_admin{

    public function menuregister(){
        add_action('admin_menu', array($this, 'mymenu'));
    }
}

$menuAdmin = new menuAdmin();

?>