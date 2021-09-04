<?php
/**
 * Theme Functions.
 *
 * @package Anwpgen
 */

 function anwpgen_enqueue_script (){
    /* registering style and script*/
    wp_register_style( 'style-css', get_stylesheet_uri(), [], filemtime(get_template_directory( ). '/style.css'), 'all');
    wp_register_style( 'bootstrap-css', get_template_directory_uri(  ). '/assets/src/library/css/bootstrap.min.css', [], 4.5, 'all');

    wp_register_script( 'main-js', get_template_directory_uri( ). '/assets/main.js', [], filemtime(get_template_directory(  ). '/assets/main.js'), true );
    wp_register_script( 'bootstrap-js', get_template_directory_uri( ). '/assets/src/library/css/bootstrap.min.js', ['jquery'], 4.5, true );
   
    /* calling style and script*/
    wp_enqueue_style( 'style-css');
    wp_enqueue_style( 'bootstrap-css');
    wp_enqueue_script( 'main-js');
    wp_enqueue_script( 'bootstrap-js');
     
 }
 add_action ('wp_enqueue_scripts', 'anwpgen_enqueue_script');