<?php
/*
Plugin Name: My First Plugin
Description: This is my first WordPress plugin.
Version: 1.0
Author: Shouraki
*/

function myfirstplugin_active(){
    add_option ('my_firstplugin_install_date', current('mysql'));
}
register_activation_hook(__FILE__, 'myfirstplugin_activate');

function myfirstplugin_deactive(){
    delete_option ('my_firstplugin_install_date');
}
register_deactivation_hook(__FILE__, 'myfirstplugin_deactivate');

function footer_content(){
    echo "<p>This is footer content</p>";
}
add_action ('wp_footer', 'footer_content');

function modify_post_title(){
    if($title == 'Hello World!')
{
    return "welcome to my website";
}
return $title;
}

add_filter('the_title', 'modify_post_title');

