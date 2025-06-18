<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package itums
 */

?>

<footer class="site-footer">
            <div class="container-fluid pr-0 pl-0">
              <div class="row">
                <div class="container">
                  <div class="row footer-row01">
                    <div class="col-md-4">
                      <div class="footer-logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" class="img-fluid"/>
                      </div>
                      <div class="footer-info">
                        <p class="text-justify">
                          We love to do what we do every day. Founded in 2008, ITU Management Services is committed to improving the health and well-being of patients by providing integrated healthcare insurance management services to super-specialty hospitals, multi-specialty hospitals and common individuals.
                        </p>
                      </div>
                    </div>
                    <div class="col">
                      <div class="footer-middle">
                          <h4 class="links-header text-center">Explore</h4>
                          <ul class="footer-list">
                            <li><a href="<?php echo get_site_url(); ?>">Home</a></li>
                            <li><a href="<?php echo esc_url( get_permalink(10) ); ?>">About Us</a></li>
                            <li><a href="<?php echo esc_url( get_permalink(326) ); ?>">Work with us</a></li>
                            <li><a href="<?php echo esc_url( get_permalink(193) ); ?>">Partner with Us</a></li>
                            <li><a href="<?php echo esc_url( get_permalink(228) ); ?>">Contact us</a></li>
                          </ul>
                      </div>
                    </div>
                    <div class="col">
                      <div class="footer-middle">
                          <h4 class="links-header text-center">Important Links</h4>
                          <ul class="footer-list">
                            <li><a href="<?php echo esc_url( get_permalink(704) ); ?>">Our USP</a></li>
                            <li><a href="<?php echo esc_url( get_permalink(716) ); ?>">Privacy & Security</a></li>
                            <li><a href="<?php echo esc_url( get_permalink(723) ); ?>">Site Map</a></li>
                            <li>
                                <?php 
                                  $about_section_img = get_field('about_us_image', 10);
                                ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/footer-ISO.png" class="footer-iso img-fluid" />
                            </li>
                          </ul>
                      </div>
                    </div>
                    <div class="col">
                      <ul class="footer-contact">
                        <li>
                          <i class="fas fa-phone"></i> Reg. Office: <br/>(033) 4060 2084
                        </li>
                        <li>
                          <i class="fas fa-phone"></i> Corp. Office: <br/>(033) 4601 7088
                        </li>
                        <!--<li><i class="fas fa-envelope"></i> <a href="mailto:careers@itums.co.in">careers@itums.co.in</a></li>-->
                        <li><i class="fas fa-envelope"></i> <a href="mailto:itums.website@gmail.com">itums.website@gmail.com</a></li>
                      </ul>
                      <div class="footer-location">
                        <i class="fas fa-map-marker-alt"></i>
			<strong>Corporate Office</strong>
			<article>7A, Cornfield Road, Ekdalia, Ballugunge, Southern Estate, 4th Floor, Kolkata-700019</article>
                        <?php 
                        //$footer_addresses = get_field('address', 228);
                        //echo $footer_addresses;
                        ?>
                      </div>
<!--                       <div class="footer-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3685.6146034218796!2d88.37786791443301!3d22.5186385406253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0276cafb33be41%3A0xf5f2aec4fb834647!2s56%2C+Rajkrishna+Chatterjee+Rd%2C+Bosepukur%2C+Kasba%2C+Kolkata%2C+West+Bengal+700042!5e0!3m2!1sen!2sin!4v1447043953849" width="100%" height="155" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div> -->
                    </div>
                  </div>
                </div>
              </div>
                <div class="row footer-row02">
                  <div class="col-sm-6">
                    <div class="copy-right">
                      <ul>
                        <li>&copy; ITU Management Services <?php echo date("Y");?> </li>
                        <li>Designed and Developed by <a href="http://dlive.co" target="_blank">DLive</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <ul class="footer-social">
                    <li><a href="<?php $footer_fb = get_field('facebook', 7); echo $footer_fb; ?>"><i class="fab fa-facebook-f"></i></a></li>
                      <li><a href="<?php $footer_fb = get_field('twitter', 7); echo $footer_fb; ?>"><i class="fab fa-twitter"></i></a></li>
                      <!-- <li><a href="#"><i class="fab fa-instagram"></i></a></li> -->
                      <li><a href="<?php $footer_fb = get_field('linkedin', 7); echo $footer_fb; ?>"><i class="fab fa-linkedin-in"></i></a></li>
                      <!-- <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li> -->
                      <li><a href="<?php $footer_fb = get_field('youtube', 7); echo $footer_fb; ?>"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                  </div>
                </div>
            </div>
          </footer>
          <div class="appointment-section">
            <a href="http://itums.co.in/itums/book-appointment">Book Appointment</a>
          </div>
        <script src="" async defer></script>
        <!-- <script src="<?php// echo get_template_directory_uri(); ?>/js/jquery-2.2.4.js" type="text/javascript"></script> -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.1.3.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/popper.min.js"></script>

        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.animate-enhanced.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.superslides.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
        <!-- <script src="<?php //echo get_template_directory_uri(); ?>/js/slick.js"></script> -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/waypoints.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.counterup.min.js"></script>
        <!-- gallery js starts -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/lightgallery-all.min.js" type="text/javascript"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.mousewheel.min.js" type="text/javascript"></script>
          <!-- gallery js ends -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/main.js" type="text/javascript"></script>

<?php wp_footer(); ?>

</body>
</html>
