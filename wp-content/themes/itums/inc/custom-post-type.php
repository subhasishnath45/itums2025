<?php
// getting the option that we created earlier in function-admin.php file as follows:
// register_setting( 'sunset-contact-options', 'activate_contact' );
$contact = get_option('activate_contact');
// Checking if that option is checked or not.
// @ is checking if the variable exists.
// the $contact has the value of 1, if our option is checked.
if(@$contact == 1){
	// We are enabling our custom post type.
	add_action('init','contact_custom_post_type');

	// adding a filter
	add_filter('manage_contact_posts_columns','set_contact_columns');

	add_action('manage_contact_posts_custom_column','contact_custom_column',10,2);
	// enabling the email meta box.
	add_action('add_meta_boxes','add_contact_email_meta_box');
	// We're creating the following hook to save the data.
	add_action('save_post','save_contact_email_data');
	// enabling the phone meta box.
	add_action('add_meta_boxes','add_contact_phone_meta_box');
	// We're creating the following hook to save the data.
	add_action('save_post','save_contact_phone_data');
}
/* CONTACT CPT */
function contact_custom_post_type(){
	$labels = array(
		'name' 			=> 'Messages',
		'singular_name' => 'Message',
		'menu_name' 	=> 'Messages',
		'name_admin_bar' => 'Message',
	);
	$args = array(
		'labels' => $labels,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 6,
		'menu_icon' => 'dashicons-email-alt2',
		'supports' => array('title','editor','author')
	);
	register_post_type( 'contact', $args );
}
// $columns is an array parameter, that holds all of the already existing columns.
function set_contact_columns($columns){
	// we will set new columns and unset old existing columns if needed.
	unset($columns['author']);
	// $columns['Firstname'] = __( 'Firstname', 'your_text_domain' );
	$newColumns = array();
	$newColumns['fullname'] = "Full Name";
	$newColumns['email'] = "Email";
	$newColumns['phone'] = "Phone";
	$newColumns['message'] = "Message";
	$newColumns['date'] = "Date";
	return $newColumns;
}

function contact_custom_column($column,$post_id){
	switch ($column) {
		case 'fullname':
			// message column
			echo get_the_title();
			break;
		case 'message':
			// message column
			echo get_the_excerpt();
			break;
		case 'email':
			// email column
			$email = get_post_meta($post_id, '_contact_email_value_key',true);
			echo '<a href="mailto:'.$email.'">'. $email .'</a>';
			break;
		case 'phone':
			// email column
			// echo get_post_meta($post_id, '_contact_email_value_key',true);
			echo get_post_meta($post_id, '_contact_phone_value_key',true);
			break;
		default:
			# code...
			break;
	}
}

/* CONTACT META BOXES */
function add_contact_email_meta_box(){
	add_meta_box('contact_email','Contact Email','contact_email_function','contact','side','default');
}
function contact_email_function($post){
	// a prebuilt function.
	wp_nonce_field('save_contact_email_data','contact_email_meta_box_nonce');
	$value = get_post_meta($post->ID, '_contact_email_value_key',true);
	echo '<label for="contact_email_field">Contact Email Address: </label>';
	echo '<input type="email" id="contact_email_field" name="contact_email_field" value="'.esc_attr($value).'" size="25" />';
}

function save_contact_email_data($post_id){
	// For the very first time of giving any email id.
	// Checking if the meta box exists.
	if(!isset($_POST['contact_email_meta_box_nonce'])){
		return; // returning false.
	}
	// Checking if the nonce exists
	if(! wp_verify_nonce($_POST['contact_email_meta_box_nonce'], 'save_contact_email_data')){
		return;
	}
	// we're disabling the autosave.
	if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE){
		return;
	}
	// checking the user permission.
	// If the user doesn't have the edit permission, we will not allow to edit our newly created meta box.
	if(! current_user_can('edit_post',$post_id)){
		return;
	}

	// empty field data must not be saved.
	if(!isset($_POST['contact_email_field'])){
		return;
	}
	// retrive the given data and save the data.
	$my_email_data = sanitize_text_field($_POST['contact_email_field']);

	// updating the post data
	update_post_meta($post_id, '_contact_email_value_key', $my_email_data);

	// We're creating the following hook to save the data.

}


/* PHONE META BOXES */
function add_contact_phone_meta_box(){
	add_meta_box('contact_phone','Contact Phone','contact_phone_function','contact','side','default');
}
function contact_phone_function($post){
	// a prebuilt function.
	// wp_nonce_field( int|string $action = -1, string $name = '_wpnonce', bool $referer = true, bool $echo = true )
	wp_nonce_field('save_contact_phone_data','contact_phone_meta_box_nonce');
	// get_post_meta( int $post_id, string $key = '', bool $single = false )
	$value2 = get_post_meta($post->ID, '_contact_phone_value_key',true);
	echo '<label for="contact_phone_field">Contact Phone No: </label>';
	echo '<input type="text" id="contact_phone_field" name="contact_phone_field" value="'.esc_attr($value2).'" size="25" />';
}

function save_contact_phone_data($post_id){
	// For the very first time of giving any email id.
	// Checking if the meta box exists.
	if(!isset($_POST['contact_phone_meta_box_nonce'])){
		return; // returning false.
	}
	// Checking if the nonce exists
	if(! wp_verify_nonce($_POST['contact_phone_meta_box_nonce'], 'save_contact_phone_data')){
		return;
	}
	// we're disabling the autosave.
	if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE){
		return;
	}
	// checking the user permission.
	// If the user doesn't have the edit permission, we will not allow to edit our newly created meta box.
	if(! current_user_can('edit_post',$post_id)){
		return;
	}

	// empty field data must not be saved.
	if(!isset($_POST['contact_phone_field'])){
		return;
	}
	// retrive the given data and save the data.
	$my_phone_data = sanitize_text_field($_POST['contact_phone_field']);

	// updating the post data
	update_post_meta($post_id, '_contact_phone_value_key', $my_phone_data);

	// We're creating the following hook to save the data.

}

?>