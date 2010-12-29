<?php
/**
 * 
 *
 */

if (!class_exists("demo_plugin_options")) {
	
    class demo_plugin_options {

        function demo_plugin_options() {
            add_action('admin_menu', array(&$this, 'on_admin_menu'));
        }

        function on_admin_menu() {
            add_options_page('Demo Paths Page', 'Demo Paths', 8, __FILE__ , array (&$this, 'paths_options'));
        }

        function paths_options() {
        	/**
        	 * Move all the html to it's own
        	 * file, makes everything much cleaner.
        	 */
            include('options_page.html');	
		}
        
    }
	
}

$wpdpd = new demo_plugin_paths();

?>
