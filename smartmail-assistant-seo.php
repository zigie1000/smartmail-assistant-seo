<?php
/**
 * Plugin Name: SmartMail Assistant SEO
 * Description: An AI-driven SEO plugin that provides actionable insights and automates optimizations.
 * Version: 1.0
 * Author: Marco Zagato
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

require_once plugin_dir_path( __FILE__ ) . 'includes/class-smartmail-assistant-seo.php';

function run_smartmail_assistant_seo() {
    $plugin = new SmartMail_Assistant_SEO();
    $plugin->run();
}

run_smartmail_assistant_seo();
