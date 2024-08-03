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

