<?php
/**
 * Plugin Name: React WP Admin
 * Plugin URI: https://github.com/dym5-official/react-wp-admin
 * Description: Basic WordPress plugin with React.js set up for admin interface.
 * Version: 1.0.0
 * Author: DYM5
 * Author URI: https://dym5.com
 * License: GPLv2 or later
 */

if ( ! class_exists( 'React_WP_Admin' ) ) {

    define( 'WP_REACT_ADMIN_URL', plugin_dir_url( __FILE__ ) );
    define( 'WP_REACT_ADMIN_DIR', __DIR__ );

    class React_WP_Admin {

        public function __construct() {
            $this->register_autoloads();
            $this->register_admin_page();
            $this->register_api();
        }

        private function register_autoloads() {
            spl_autoload_register(function($name){
				$name = strtolower($name);
				$name = str_replace('_', '-', $name);
				$name = 'class-' . $name;
				$file = __DIR__ . '/admin/classes/' . $name . '.php';

				if ( file_exists( $file ) ) {
					require_once $file;
				}
			});
        }

        public function register_admin_page() {
            new React_WP_Admin_Page();
        }

        public function register_api() {
            new React_WP_API();
        }

    }

    new React_WP_Admin();

}