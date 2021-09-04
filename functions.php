<?php
/**
 * Theme Functions.
 *
 * @package Anwpgen
 */

 function anwpgen_enqueue_script (){
     wp_enqueue_style( 'stylesheet', get_stylesheet_uri(), [], filemtime(get_template_directory( ). '/style.css'), 'all');
 }
 add_action ('wp_enqueue_scripts', 'anwpgen_enqueue_script');