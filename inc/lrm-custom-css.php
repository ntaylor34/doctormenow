<?php
/**
 * LRM theme options custom CSS sub panel.
 *
 * @package LRM
 */

?>

<div class="wrap">
	<div id="option-page-heading">
		<h1><img src="<?php echo get_template_directory_uri(); ?>/assets/img/main_logo_white.png" alt="Link Right Media Theme" />Theme Options</h1>
	</div>
	<div><?php settings_errors(); ?></div>
	<form id="submitForm" method="post" action="options.php" class="lrm-options-form">
		<div class="option-group-panel">
			<?php do_settings_sections('lrm_custom_css' ); ?>
		</div>
		<?php
			settings_fields('lrm-css-group');
			submit_button('Save Changes', 'primary', 'btnSubmit');
		?>
	</form>
</div>