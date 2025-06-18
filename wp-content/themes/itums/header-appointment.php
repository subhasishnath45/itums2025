<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package itums
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fonts/flaticon.css">
    <!-- Testimonial css starts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" rel="stylesheet" />
    <!-- Testimonial css ends -->
    <!-- gallery css starts -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/lightgallery.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css">
    <!-- <link rel="stylesheet" href="<?php// echo get_template_directory_uri(); ?>/css/main.css"> -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-2.2.4.js" type="text/javascript"></script>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBeyUdZUbi2wecz-7lSPqeBvB05iq1XAGQ"></script> -->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="page-loader"> 
	<div> 
	  <div class="page-loader-body">
	    <div class="cssload-loader">
	      <div class="cssload-inner cssload-one"></div>
	      <div class="cssload-inner cssload-two"></div>
	      <div class="cssload-inner cssload-three"></div>
	    </div>
	  </div>
	</div>
</div>
<header>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4">
      <ul class="header-contact-01">
        <li>
          <i class="fas fa-phone"></i> Landline No. <?php echo get_field( "header_phone", 7 );
?>
        </li>
      </ul>
    </div>
    <div class="col-sm-4">
      <ul class="header-contact-02">
        <!-- <li>
          <i class="fas fa-phone"></i> Landline No. (033) 4060 2084
        </li>
        <li>
          <i class="fas fa-mobile"></i> Telephone No. (+91) 9830013731
        </li> -->
        <li>
          <?php $email_header_link = get_field('header_email',7); ?>
          <i class="fas fa-envelope"></i>
         <a href="mailto:<?php echo get_field( "header_email", 7 ); ?>">
            <?php echo get_field( "header_email", 7 ); ?>
          </a>
       </li>
      </ul>
    </div>
    <div class="col-sm-4">
      <div class="header-location">
        <i class="fas fa-map-marker-alt"></i>
        <?php echo get_field( "header_address", 7 ); ?>
      </div>
    </div>
  </div>
</div>
</header>


<?php get_template_part('template-parts/content','subbanner'); ?>


<?php get_template_part('template-parts/content', 'headermenu'); ?>

