<?php
/**
 * Plugin Name: Test Plugin
 * Description: Just a test plugin.
 * Version: 1.0.0
 * Author: Carl
 * Text Domain: test-plugin
 */

define( 'TP_DIR', plugin_dir_path( __FILE__ ) );

require TP_DIR . 'functions.php';

new TP_Init();