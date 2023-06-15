<?php 
/**
 * @package HelloWorldPlugin
 */

/*
Plugin Name: Hello World Plugin
Plugin URI : http://sampleplugin.com
Description: Just a Simple Plugin to show a hello World Message
Version:1.0.0
Author:Ajay Mathesh
Author URI:http://ajaymathesh.com
License:GPLv2 or Other
Text-Domain:helloworld-plugin
*/

if ( ! defined( 'ABSPATH' ) ) {
	die;
}

function display_hello_world_msg(){
    echo "<h1>Hello World</h1>";
}
function hello_world_menu(){
    add_menu_page(
      "Hello World", //Page Title
      "Hello World",  //Menu Title
      "manage_options", //Capability
      "hello_world",    //slug
      "display_hello_world_msg",  //Callback
      '',  //icon
      6   //priority
    );}
add_action( 'admin_menu', 'hello_world_menu');
