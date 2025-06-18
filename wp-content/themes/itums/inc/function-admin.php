<?php 

function sunset_add_admin_page() {
	//Generate Sunset Admin Page
	add_menu_page( 'Custom Theme Options', 'Custom Options', 'manage_options', 'alecaddd_sunset', 'sunset_theme_create_page', get_template_directory_uri() . '/img/control-icon.png', 110 );

	add_submenu_page( 'alecaddd_sunset', 'Custom Contact Form', 'Contact Form', 'manage_options', 'alecaddd_sunset_theme_contact', 'sunset_contact_form_page' );

}
add_action( 'admin_menu', 'sunset_add_admin_page' );

//Activate custom settings
add_action( 'admin_init', 'sunset_custom_settings' );
function sunset_custom_settings() {

	//Contact Form Options
	register_setting( 'sunset-contact-options', 'activate_contact' );
	
	add_settings_section( 'sunset-contact-section', 'Contact Form', 'sunset_contact_section', 'alecaddd_sunset_theme_contact');
	// creating a custom field.
	add_settings_field( 'activate-form', 'Activate Contact Form', 'sunset_activate_contact', 'alecaddd_sunset_theme_contact', 'sunset-contact-section' );

}
function sunset_activate_contact() {
	$options = get_option( 'activate_contact' );
	$checked = ( @$options == 1 ? 'checked' : '' );
	echo '<label><input type="checkbox" id="custom_header" name="activate_contact" value="1" '.$checked.' />Activate the Contact Form</label>';
}

function sunset_contact_section() {
	echo 'Activate and Deactivate the Built-in Contact Form';
}

function sunset_contact_form_page() {
	require_once( get_template_directory() . '/inc/templates/sunset-contact-form.php' );
}

?>