<?php
/**
 * Settings functions for the plugin.
 */

namespace KakaoPlusfriend\Settings;

// Setup settings
function setup() {
	add_action(
		'plugins_loaded',
		function() {
			add_action( 'admin_menu', __NAMESPACE__ . '\\admin_menu' );
            add_action( 'admin_init', __NAMESPACE__ . '\\admin_init' );
		}
	);
}

// Sets up the plugin settings menu
function admin_menu() {
	add_options_page(
		esc_html__( 'Kakao Plusfriend Settings', 'kakao-plusfriend' ),
		esc_html__( 'Kakao Plusfriend', 'kakao-plusfriend' ),
		'manage_options',
		'kakao-plusfriend',
		__NAMESPACE__ . '\\kakao_plusfriend_settings_page'
	);
}

// Register and define the settings
function admin_init() {
    register_setting( 'kakao-plusfriend', 'kakao_plusfriend_settings' );
    // add_settings_section(
    //     'kakao-plusfriend-general',
    //     'General Settings',
    //     __NAMESPACE__ . '\\general_section',
    //     'kakao-plusfriend'
    // );
    // add_settings_field( 'app_key', 'APP KEY', __NAMESPACE__ . '\\display_app_key_field', 'kakao-plusfriend', 'kakao-plusfriend-general' );
}

// Render the settings page
function kakao_plusfriend_settings_page() {
?>
<div class="wrap">
    <h1>Kakao Plusfriend Settings</h1>
    <p>플러스친구 플러그인은 간편하게 플러스친구 추가하기와 1:1 채팅 기능을 사용할 수 있게 도와줍니다.</p>

    <form method="post" action="options.php">
        <?php settings_fields( 'kakao_plusfriend_settings' ); ?>
        <?php $options = get_option( 'kakao_plusfriend_settings' ); ?>
        
        <h2>General Settings</h2>

        <table class="form-table">
            <tr valign="top">
                <th scope="row">APP KEY</th>
                <td><input type="text" name="kakao_plusfriend_settings[app_key]" 
                        value="<?php echo esc_attr( $options['app_key'] ); ?>" /></td>
            </tr>    
            <tr valign="top">
                <th scope="row">Plusfriend Id</th>
                <td><input type="text" name="kakao_plusfriend_settings[plusfriend_id]" 
                        value="<?php echo esc_attr( $options['plusfriend_id'] ); ?>" /></td>
            </tr>    
        </table>    

        <h2 class="title">플러스친구 추가 버튼</h2>
        <p>웹페이지에 플러스친구 친구추가 버튼을 생성합니다.</p>

        <h2 class="title">플러스친구 1:1 채팅 버튼</h2>
        <p>웹페이지에 플러스친구 1:1 채팅 버튼을 생성합니다.</p>

        <?php submit_button(); ?>
    </form>    
</div>    
<?php
}

// Settings validation callback

