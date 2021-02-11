<?php
/**
 * LRM Theme Options.
 *
 * @package LRM
 */

/* ==========================================================================
   Add LRM administration page
   ========================================================================== */

function lrm_admin_menus() {

	// Create LRM admin page
	add_menu_page(
		'LRM Theme Options',
		'Link Right Theme',
		'manage_options',
		'lrm_options',
		'lrm_theme_create_page',
		get_template_directory_uri() . '/assets/img/theme-icon.png',
		59
	);

	// Create LRM admin subpages
	$gen_options_page = add_submenu_page( 'lrm_options', 'LRM Theme Options', 'General Options', 'manage_options', 'lrm_options', 'lrm_theme_create_page' );
	$code_snippets_page = add_submenu_page( 'lrm_options', 'LRM Code Snippets', 'Code Snippets', 'manage_options', 'lrm_code_snippets', 'lrm_theme_code_snippets' );
	$custom_css_page = add_submenu_page( 'lrm_options', 'LRM Custom CSS', 'Custom CSS', 'manage_options', 'lrm_custom_css', 'lrm_theme_custom_css' );

	// Activate custom settings
	add_action('admin_init', 'lrm_custom_settings');
	// Load per page resources
	add_action('load-' . $gen_options_page, 'lrm_options_resources');
	add_action('load-' . $code_snippets_page, 'lrm_options_resources');
	add_action('load-' . $custom_css_page, 'lrm_options_resources');

}
add_action('admin_menu', 'lrm_admin_menus');

/*
   Load Options Resources
   ========================================================================== */

function lrm_options_resources() {
	wp_enqueue_media();
	wp_enqueue_style( 'lrm-options-styles', get_template_directory_uri() . '/assets/css/lrm.theme-options.css', '1.0.0' );
	wp_enqueue_script( 'lrm-options-scripts', get_template_directory_uri(). '/assets/js/lrm.theme-options.js', array('jquery'), true );
}

/*
   General Options Settings
   ========================================================================== */

function lrm_custom_settings() {
	/*
	 * Register Settings
	 */
	// General
	register_setting( 'lrm-settings-group', 'site_logo' );
	register_setting( 'lrm-settings-group', 'favicon' );
	register_setting( 'lrm-settings-group', 'header_info' );
	register_setting( 'lrm-settings-group', 'primary_phone' );
	register_setting( 'lrm-settings-group', 'primary_email' );
	// Post
	register_setting( 'lrm-settings-group', 'show_post_author');
	// Social
	register_setting( 'lrm-settings-group', 'social_facebook', 'lrm_sanitize_url_field' );
	register_setting( 'lrm-settings-group', 'social_twitter', 'lrm_sanitize_url_field' );
	register_setting( 'lrm-settings-group', 'social_instagram', 'lrm_sanitize_url_field' );
	register_setting( 'lrm-settings-group', 'social_linkedin', 'lrm_sanitize_url_field' );
	register_setting( 'lrm-settings-group', 'social_pinterest', 'lrm_sanitize_url_field' );
	register_setting( 'lrm-settings-group', 'social_youtube', 'lrm_sanitize_url_field' );
	register_setting( 'lrm-settings-group', 'social_yelp', 'lrm_sanitize_url_field' );
    register_setting( 'lrm-settings-group', 'social_houzz', 'lrm_sanitize_url_field' );
	register_setting( 'lrm-settings-group', 'social_rss', 'lrm_sanitize_url_field' );
	// Code Snippets
	register_setting( 'lrm-snippets-group', 'snippets_header' );
	register_setting( 'lrm-snippets-group', 'snippets_body' );
	register_setting( 'lrm-snippets-group', 'snippets_footer' );
	register_setting( 'lrm-snippets-group', 'conversion_page' );
	register_setting( 'lrm-snippets-group', 'conversion_code' );
	// Custom CSS
	register_setting( 'lrm-css-group', 'custom_css' );

	/*
	 * Sections
	 */
	add_settings_section( 'lrm-general-options', 'General Options', 'lrm_general_options', 'lrm_general_options' );
	add_settings_section( 'lrm-post-options', 'Post Options', 'lrm_post_options', 'lrm_post_options');
	add_settings_section( 'lrm-social-options', 'Social Options', 'lrm_social_options', 'lrm_social_options' );

	add_settings_section( 'lrm-header-snippets', 'Code Snippets Header', 'lrm_snippets_header', 'lrm_snippets_header' );
	add_settings_section( 'lrm-body-snippets', 'Code Snippets Body', 'lrm_snippets_body', 'lrm_snippets_body' );
	add_settings_section( 'lrm-footer-snippets', 'Code Snippets Footer', 'lrm_snippets_footer', 'lrm_snippets_footer' );
	add_settings_section( 'lrm-conversion-tracking', 'Conversion Tracking', 'lrm_snippets_conversion', 'lrm_snippets_conversion' );

	add_settings_section( 'lrm-custom-css', 'Custom CSS', 'lrm_custom_styles', 'lrm_custom_css' );

	/*
	 * Fields
	 */
	// General
	add_settings_field( 'site-logo', 'Site Logo', 'lrm_site_logo', 'lrm_general_options', 'lrm-general-options' );
	add_settings_field( 'favicon', 'Favicon', 'lrm_favicon', 'lrm_general_options', 'lrm-general-options' );
	add_settings_field( 'header-info', 'Header Info', 'lrm_header_info', 'lrm_general_options', 'lrm-general-options' );
	add_settings_field( 'primary-phone', 'Primary Number', 'lrm_primary_phone', 'lrm_general_options', 'lrm-general-options' );
	add_settings_field( 'primary-email', 'Primary Email', 'lrm_primary_email', 'lrm_general_options', 'lrm-general-options' );
	// Post
	add_settings_field( 'show-post-author', 'Show Post Author', 'lrm_show_post_author', 'lrm_post_options', 'lrm-post-options' );
	// Social
	add_settings_field( 'social-facebook', 'Facebook URL', 'lrm_social_facebook', 'lrm_social_options', 'lrm-social-options' );
	add_settings_field( 'social-twitter', 'Twitter URL', 'lrm_social_twitter', 'lrm_social_options', 'lrm-social-options' );
	add_settings_field( 'social-instagram', 'Instagram URL', 'lrm_social_instagram', 'lrm_social_options', 'lrm-social-options' );
	add_settings_field( 'social-linkedin', 'LinkedIn URL', 'lrm_social_linkedin', 'lrm_social_options', 'lrm-social-options' );
	add_settings_field( 'social-pinterest', 'Pinterest URL', 'lrm_social_pinterest', 'lrm_social_options', 'lrm-social-options' );
	add_settings_field( 'social-youtube', 'YouTube URL', 'lrm_social_youtube', 'lrm_social_options', 'lrm-social-options' );
	add_settings_field( 'social-yelp', 'Yelp URL', 'lrm_social_yelp', 'lrm_social_options', 'lrm-social-options' );
    add_settings_field( 'social-houzz', 'Houzz URL', 'lrm_social_houzz', 'lrm_social_options', 'lrm-social-options' );
	add_settings_field( 'social-rss', 'RSS Feed URL', 'lrm_social_rss', 'lrm_social_options', 'lrm-social-options' );
	// Code Snippets
	add_settings_field( 'header-snippets', 'Header Snippets', 'lrm_header_snippets', 'lrm_snippets_header', 'lrm-header-snippets' );
	add_settings_field( 'body-snippets', 'Body Snippets', 'lrm_body_snippets', 'lrm_snippets_body', 'lrm-body-snippets' );
	add_settings_field( 'footer-snippets', 'Footer Snippets', 'lrm_footer_snippets', 'lrm_snippets_footer', 'lrm-footer-snippets' );
	add_settings_field( 'conversion-page', 'Conversion Page', 'lrm_conversion_page', 'lrm_snippets_conversion', 'lrm-conversion-tracking' );
	add_settings_field( 'conversion-code', 'Tracking Code', 'lrm_conversion_code', 'lrm_snippets_conversion', 'lrm-conversion-tracking' );
	// Custom CSS
	add_settings_field( 'custom-css', 'Custom CSS', 'lrm_custom_css', 'lrm_custom_css', 'lrm-custom-css' );
}

/*
   Section Functions
   ========================================================================== */

function lrm_general_options() {
	echo 'Use this section to customize your general site settings and contact information.';
}
function lrm_post_options() {
	echo 'Use this section to update options related to posts and pages.';
}
function lrm_social_options() {
	echo 'Use this section to update your social pages and choose which to display.';
}
function lrm_snippets_header() {
	echo 'Use this section to input custom code snippets within the <strong>head</strong> of the document.';
}
function lrm_snippets_body() {
	echo 'Use this section to input custom code snippets after the opening <strong>body</strong> tag of the document.';
}
function lrm_snippets_footer() {
	echo 'Use this section to input custom code snippets before the closing <strong>body</strong> tag of the document.';
}
function lrm_snippets_conversion() {
	echo 'Use this section to input a conversion tracking code that will only show on a specified page.';
}
function lrm_custom_styles() {
	echo 'Use this section to write custom styles.';
}

/*
   Field Functions
   ========================================================================== */

// General Options Page
function lrm_site_logo() {
	$site_logo = esc_attr( get_option('site_logo') );
	if (empty($site_logo)) {
		echo "<div id='logo-preview' style='background-image: url($site_logo);'></div>";
		echo
			'<input type="button" class="button button-secondary" value="Upload Logo" id="upload-button" />
			<p class="description">Recommended ratio is 3:1</p>
			<input type="hidden" id="site-logo-url" name="site_logo" value="" />';
	} else {
		echo "<div id='logo-preview' style='background-image: url($site_logo);'></div>";
		echo
			'<input type="button" class="button button-secondary" value="Update Logo" id="upload-button" />
			<input type="button" class="button button-secondary" value="Remove" id="remove-button" />
			<p class="description">Recommended ratio is 3:1</p>
			<input type="hidden" id="site-logo-url" name="site_logo" value="'.$site_logo.'" />';
	}
}
function lrm_favicon() {
	$favicon = esc_attr( get_option('favicon') );
	if (empty($favicon)) {
		echo "<div id='favicon-preview' style='background-image: url($favicon);'></div>";
		echo
		'<input type="button" class="button button-secondary" value="Upload Favicon" id="favicon-upload-button" />
			<p class="description">Recommended size is 16x16 pixels</p>
			<input type="hidden" id="favicon-url" name="favicon" value="" />';
	} else {
		echo "<div id='favicon-preview' style='background-image: url($favicon);'></div>";
		echo
			'<input type="button" class="button button-secondary" value="Update Favicon" id="favicon-upload-button" />
			<input type="button" class="button button-secondary" value="Remove" id="favicon-remove-button" />
			<p class="description">Recommended size is 16x16 pixels</p>
			<input type="hidden" id="favicon-url" name="favicon" value="'.$favicon.'" />';
	}
}
function lrm_header_info() {
	$header_info = esc_attr( get_option('header_info') );
	echo '<input type="text" name="header_info" value="'.$header_info.'" placeholder="Enter anything to be displayed in the header above the navigation." />';
}
function lrm_primary_phone() {
	$primary_phone = esc_attr( get_option('primary_phone') );
	echo '<input type="phone" name="primary_phone" value="'.$primary_phone.'" placeholder="(123) 456-7890" />';
}
function lrm_primary_email() {
	$primary_email = esc_attr( get_option('primary_email') );
	echo '<input type="email" name="primary_email" value="'.$primary_email.'" placeholder="example@email.com" />';
}

// Post Options
function lrm_show_post_author() {
	$show_post_author = esc_attr( get_option('show_post_author') );
	$checked = checked(1, $show_post_author, false);
	echo '<input type="checkbox" name="show_post_author" value="1" '.$checked.'/>';
}

// Social Options
function lrm_social_facebook() {
	$social_facebook = esc_attr( get_option('social_facebook') );
	echo '<input type="text" name="social_facebook" value="'.$social_facebook.'" placeholder="https://www.facebook.com/your-page-handler" />';
}
function lrm_social_twitter() {
	$social_twitter = esc_attr( get_option('social_twitter') );
	echo '<input type="text" name="social_twitter" value="'.$social_twitter.'" placeholder="https://twitter.com/your-page-handler" />';
}
function lrm_social_instagram() {
	$social_instagram = esc_attr( get_option('social_instagram') );
	echo '<input type="text" name="social_instagram" value="'.$social_instagram.'" placeholder="https://www.instagram.com/your-page-handler" />';
}
function lrm_social_linkedin() {
	$social_linkedin = esc_attr( get_option('social_linkedin') );
	echo '<input type="text" name="social_linkedin" value="'.$social_linkedin.'" placeholder="https://www.linkedin.com/your-page-handler" />';
}
function lrm_social_pinterest() {
	$social_pinterest = esc_attr( get_option('social_pinterest') );
	echo '<input type="text" name="social_pinterest" value="'.$social_pinterest.'" placeholder="https://www.pinterest.com/your-page-handler" />';
}
function lrm_social_youtube() {
	$social_youtube = esc_attr( get_option('social_youtube') );
	echo '<input type="text" name="social_youtube" value="'.$social_youtube.'" placeholder="https://www.youtube.com/your-page-handler" />';
}
function lrm_social_yelp() {
	$social_yelp = esc_attr( get_option('social_yelp') );
	echo '<input type="text" name="social_yelp" value="'.$social_yelp.'" placeholder="https://www.yelp.com/your-page-handler" />';
}
function lrm_social_houzz() {
    $social_houzz = esc_attr( get_option('social_houzz') );
    echo '<input type="text" name="social_houzz" value="'.$social_houzz.'" placeholder="https://www.houzz.com/your-page-handler" />';
}
function lrm_social_rss() {
	$social_rss = esc_attr( get_option('social_rss') );
	echo '<input type="text" name="social_rss" value="'.$social_rss.'" placeholder="https://www.yourfeed.com/your-rss-feed" />';
}

// Code Snippets Page
function lrm_header_snippets() {
	$header_snippets = esc_attr( get_option('snippets_header') );
	echo '<pre class="pre-block"><textarea rows="10" cols="140" name="snippets_header" placeholder="Enter code snippets here" />'.$header_snippets.'</textarea></pre>';
}
function lrm_body_snippets() {
	$body_snippets = esc_attr( get_option('snippets_body') );
	echo '<pre class="pre-block"><textarea rows="10" cols="140" name="snippets_body" placeholder="Enter code snippets here" />'.$body_snippets.'</textarea></pre>';
}
function lrm_footer_snippets() {
	$footer_snippets = esc_attr( get_option('snippets_footer') );
	echo '<pre class="pre-block"><textarea rows="10" cols="140" name="snippets_footer" placeholder="Enter code snippets here" />'.$footer_snippets.'</textarea></pre>';
}
function lrm_conversion_page() {
	$conversion_page = esc_attr( get_option('conversion_page') );
	wp_dropdown_pages(
		array(
			'name' => 'conversion_page',
			'echo' => 1,
			'show_option_none' => __( '&mdash; Select &mdash;' ),
			'option_none_value' => '0',
			'selected' => $conversion_page
		)
	);
}
function lrm_conversion_code() {
	$conversion_code = esc_attr( get_option('conversion_code') );
	echo '<pre class="pre-block"><textarea rows="10" cols="140" name="conversion_code" placeholder="Enter tracking code here" />'.$conversion_code.'</textarea></pre>';
}

// Custom CSS Page
function lrm_custom_css() {
	$custom_css = esc_attr( get_option('custom_css') );
	echo '<pre class="pre-block"><textarea rows="10" cols="140" name="custom_css" placeholder="Enter custom CSS here" />'.$custom_css.'</textarea></pre>';
}

// Sanitization settings example
function lrm_sanitize_url_field( $input ) {
	$output = sanitize_text_field( $input );
	// strip '@'
	$output = str_replace('@', 'replace', $output);
	return $output;
}

/*
   Generate the LRM theme pages
   ========================================================================== */

// Generate LRM admin page
function lrm_theme_create_page () {

	if ( !current_user_can('manage_options')) {
		wp_die( __( 'You do not have sufficient permissions to access this page.', 'lrm' ) );
	}

	require_once( get_template_directory() . '/inc/lrm-options.php' );
}

// Generate LRM code snippets subpage
function lrm_theme_code_snippets() {

	if ( !current_user_can('manage_options')) {
		wp_die( __( 'You do not have sufficient permissions to access this page.', 'lrm' ) );
	}

	require_once( get_template_directory() . '/inc/lrm-code-snippets.php' );
}

// Generate LRM custom CSS subpage
function lrm_theme_custom_css() {

	if ( !current_user_can('manage_options')) {
		wp_die( __( 'You do not have sufficient permissions to access this page.', 'lrm' ) );
	}

	require_once( get_template_directory() . '/inc/lrm-custom-css.php' );
}

/* ========================================================================== */