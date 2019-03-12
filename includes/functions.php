<?php
/**
 * Core plugin functionality.
 *
 */

namespace KakaoPlusfriend;

use KakaoPlusfriend\Settings;
use \WP_Error as WP_Error;

// Default setup routine
function setup() {
    add_action( 'init', __NAMESPACE__ . '\init' );
    add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_assets' );
    add_action( 'wp_footer', __NAMESPACE__ . '\add_the_script' );
}

// Initializes the plugin
function init() {
}

// Activate the plugin
function activate() {
	// First load the init scripts in case any rewrite functionality is being loaded
    // init();
    // flush_rewrite_rules();
}

// Deactivate the plugin
// !! Uninstall routines should be in uninstall.php
function deactivate() {
}

/**
 * Enqueue scripts for front-end
 *
 */
function enqueue_assets() {
	// Load the Kakao JavaScript SDK.
    wp_enqueue_script( 'kakao-js-sdk', '//developers.kakao.com/sdk/js/kakao.min.js' );

	// Load the plugin front-end style.
	wp_enqueue_style( 'kakao-plusfriend-style', KAKAO_PLUSFRIEND_URL . 'assets/css/style.css', null, null );
}

/**
 * Add Plusfriend JS script
 *
 */
function add_the_script() {
    // $options = get_option( 'kakao_plusfriend_settings' );
    $settings = Settings\get_settings();
?>
<div id="plusfriend-addfriend-button"></div>
<?php if ( $settings['friend_btn'] ) { ?>
<script type='text/javascript'>
    //<![CDATA[
        Kakao.init('<?php echo $settings['app_key']; ?>');
        Kakao.PlusFriend.createAddFriendButton({
            container: '#plusfriend-addfriend-button',
            plusFriendId: '<?php echo $settings['plusfriend_id']; ?>',
            size: '<?php echo $settings['friend_btn_size']; ?>',
            color: '<?php echo $settings['friend_btn_color']; ?>'
        });
    //]]>
</script>
<?php    
  }    
}


