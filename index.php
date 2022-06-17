<?php 
/***
 * Plugin Name: Custom Guternberg block
 * Description: Custom Guternburg block  
 * Version: 1.0.0
 * Author: Vishnu Kumar
 */

 if(! defined('ABSPATH') ) exit;


 class Custom_Guternberg_Block{

    function __construct()
    {
        
        add_action('enqueue_block_editor_assets', array( $this,'enqueque_js_files') );
    }
    function enqueque_js_files(){
        wp_enqueue_script('customjs', plugin_dir_url(__FILE__). 'customjs.js',array('wp-blocks'));
    }


 }

 $customguternbergblock = new Custom_Guternberg_Block();