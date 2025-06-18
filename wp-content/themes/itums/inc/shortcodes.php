<?php 

// contact form shortcode
function sunset_contact_form( $atts, $content = null ) {
	
	//[contact_form]
	
	//get the attributes
	$atts = shortcode_atts(
		array(),
		$atts,
		'contact_form'
	);
	
	//return HTML
	ob_start();
	include 'templates/contact-form-html.php';
	// ob_get_clean() will return will return the above output buffered content.
	return ob_get_clean();
	// return "This is returned for our contact form.";
	
}
add_shortcode( 'contact_form', 'sunset_contact_form' );

?>