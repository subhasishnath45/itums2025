<h1>Custom Contact Form</h1>
<?php settings_errors(); ?>

<p>Use this shortcode to activate the Contact Form inside a Page or Post.</p>
<hr/>
<b><code>[contact_form]</code></b>

<form method="post" action="options.php" class="sunset-general-form">
	<?php settings_fields( 'sunset-contact-options' ); ?>
	<?php do_settings_sections( 'alecaddd_sunset_theme_contact' ); ?>
	<?php submit_button(); ?>
</form>