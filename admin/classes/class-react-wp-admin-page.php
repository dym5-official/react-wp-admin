<?php

if ( ! class_exists( 'React_WP_Admin_Page' ) ) {
    
    class React_WP_Admin_Page {

        public function __construct() {
            add_action( 'admin_menu', array( $this, 'add_menus' ) );
            add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_assets' ) );
        }

        public function add_menus() {
            add_menu_page(
				'React WP Admin Page Title',
				'React WP Admin',
				'edit_posts', // capability
				'react-wp-admin',
				array( $this, 'admin_page' ),
				'dashicons-admin-network', // icon URL
				null // position
			);
        }

        public function admin_page() {
            echo '<div id="wp-admin-plugin-page-root"></div>';
        }

        public function enqueue_assets($hook) {
            if ( 'toplevel_page_react-wp-admin' !== $hook ) {
                return;
            }

            $script      = 'admin/assets/bundle.js';
            $script_file = WP_REACT_ADMIN_DIR . '/' . $script;

            if ( file_exists( $script_file ) ) {
                wp_enqueue_script( 'react-wp-admin', WP_REACT_ADMIN_URL . $script, array(), filemtime( $script_file ), true );
            }

            $style      = 'admin/assets/bundle.css';
            $style_file = WP_REACT_ADMIN_DIR . '/' . $style;

            if ( file_exists( $style_file ) ) {
                wp_enqueue_style( 'react-wp-admin', WP_REACT_ADMIN_URL . $style, array(), filemtime( $style_file ) );
            }
        }
        
    }

}