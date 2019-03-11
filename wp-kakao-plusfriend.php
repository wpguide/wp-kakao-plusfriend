<?php
/**
 * Plugin Name:     WP Kakao Plusfriend
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     PLUGIN DESCRIPTION HERE
 * Version:         0.1.0
 * Author:          Useful Paradigm
 * Author URI:      https://www.usefulparadigm.com/
 * License:         GPL2
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

// Global constants
define( 'KAKAO_PLUSFRIEND_VERSION', '0.1.0' );
define( 'KAKAO_PLUSFRIEND_URL', plugin_dir_url( __FILE__ ) );
define( 'KAKAO_PLUSFRIEND_PATH', plugin_dir_path( __FILE__ ) );
define( 'KAKAO_PLUSFRIEND_INC', KAKAO_PLUSFRIEND_PATH . 'includes/' );

// Include files
require_once KAKAO_PLUSFRIEND_INC . 'functions.php';
require_once KAKAO_PLUSFRIEND_INC . 'settings.php';

// activation/deactivation
register_activation_hook( __FILE__, '\KakaoPlusfriend\activate' );
register_deactivation_hook( __FILE__, '\KakaoPlusfriend\deactivate' );

// Bootstrap!
KakaoPlusfriend\setup();
KakaoPlusfriend\Settings\setup();
