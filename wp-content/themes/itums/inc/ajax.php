<?php 

add_action( 'wp_ajax_nopriv_sunset_save_user_contact_form', 'sunset_save_contact' );
add_action( 'wp_ajax_sunset_save_user_contact_form', 'sunset_save_contact' );

function sunset_save_contact(){

	$title = wp_strip_all_tags($_POST["name"]);
	$email = wp_strip_all_tags($_POST["email"]);
	$phone = wp_strip_all_tags($_POST["phone"]);
	$message = wp_strip_all_tags($_POST["message"]);

	echo $title . ',' . $email . ',' . $phone . ',' .$message;

	//wp_insert_post(); =  to save the form data into our database.

	// Following array holds all the datas I want to insert into my contact post type after form submission
	$args = array(
		'post_title' => $title,
		'post_content' => $message,
		'post_author' => 1,
		'post_status'  => 'publish',
		'post_type'    => 'contact',
		'meta_input' => array(
			'_contact_email_value_key' => $email,
			'_contact_phone_value_key' => $phone
		)
	);

	$postID = wp_insert_post($args);
	echo $postID;
	die();

}

?>