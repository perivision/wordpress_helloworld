<?php
/**
 * Plugin name: Hello St. Louis Plugin 
 *  
 * 
 */


if (!class_exists("demo_plugin_options")) {
	
    class demo_plugin_options {

        function demo_plugin_options() {
            add_action('admin_menu', array(&$this, 'on_admin_menu'));
            add_action('admin_init', array(&$this, 'on_init'));
        }

        function on_init(){
            register_setting('hellowp','greeting', array (&$this, 'validate_settings'));
	}

        function on_admin_menu() {
            add_options_page('Demo Options Page', 'Demo Options',
			     8, __FILE__ , array (&$this, 'demo_options'));
        }

        function demo_options() {
        	/**
        	 * Move all the html to it's own
        	 * file, makes everything much cleaner.
        	 */
            include('options_page.html');	
	}

        function validate_settings() {
        }
        
    }
	
}

$wpdpd = new demo_plugin_options();

?>
