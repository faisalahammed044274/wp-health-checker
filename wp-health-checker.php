<?php
/*
Plugin Name: WP Health Checker – Diagnose & Report
Plugin URI: https://example.com/
Description: Diagnoses common WordPress health issues and provides quick reports.
Version: 1.0
Author: Your Name
License: GPL2
*/

if ( ! defined( 'ABSPATH' ) ) exit;

// Define path constants
define( 'WPHC_PATH', plugin_dir_path( __FILE__ ) );
define( 'WPHC_URL', plugin_dir_url( __FILE__ ) );

// Load core logic
require_once WPHC_PATH . 'includes/class-health-check-core.php';

// Admin menu registration
add_action( 'admin_menu', function() {
    add_menu_page(
        'WP Health Checker',
        'WP Health Checker',
        'manage_options',
        'wp-health-checker',
        'wp_health_checker_dashboard',
        'dashicons-heart',
        90
    );
});

// Dashboard page
function wp_health_checker_dashboard() {
    include WPHC_PATH . 'templates/dashboard.php';
}
