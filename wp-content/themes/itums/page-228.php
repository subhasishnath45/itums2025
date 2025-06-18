<?php
	/* Template Name: Contact us Page Template */
	get_header();
?>
<?php 
	if(have_posts()):
		while(have_posts()):
			the_post();
?>

<div class="site-body contact-body">
            <section class="section section-lg bg-default">
                <!-- section wave-->
<!--                 <div class="section-wave">
                  <svg x="0px" y="0px" width="1920px" height="46px" viewBox="0 0 1920 46">
                    <path d="M1920,0.5c-82.8,0-109.1,44-192.3,44c-78.8,0-116.2-44-191.7-44c-77.1,0-115.9,44-192,44c-78.2,0-114.6-44-192-44c-78.4,0-115.3,44-192,44c-76.9-0.1-119-44-192-44c-77,0-115.2,44-192,44c-73.6,0-114-44-190.9-44c-78.5,0-117.2,44-194.1,44c-75.9,0-113-44-191-44V46h1920V0.5z"></path>
                  </svg>
                </div> -->
                <div class="container container-bigger">
                  <div class="row row-ten row-50 justify-content-md-center justify-content-xl-between">
                    <div class="col-md-12 col-lg-6">
                      <h3><?php the_title(); ?></h3>
                      <hr class="divider divider-left divider-default">
                      <div class="big">
                        <?php the_content(); ?>
                      <!-- RD Mailform-->
                      </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                      <div class="column-aside">
                        <div class="row">
                          <div class="col-sm-10 col-md-6 col-lg-12">
                            <h6>Address</h6>
                            <hr class="divider-thin">
                            <?php the_field('address', $post->ID); ?>
                          </div>
                          <div class="col-sm-10 col-md-6 col-lg-12">
                            <h6>Phone</h6>
                            <hr class="divider-thin">
                            <article class="box-inline ph-box">
							<?php the_field('phone', $post->ID); ?>
                            </article>
                          </div>
                          <div class="col-sm-10 col-md-6 col-lg-12">
                            <h6>E-mail</h6>
                            <hr class="divider-thin">
                            <article class="box-inline">
                    			<?php the_field('email', $post->ID); ?>
                            </article>
                          </div>
                          <!-- <div class="col-sm-10 col-md-6 col-lg-12">
                            <h6>Opening hours</h6>
                            <hr class="divider-thin">
                            <article class="box-inline"><span class="icon novi-icon icon-md-smaller icon-primary mdi mdi-calendar-clock"></span>
                              <ul class="list-0">
                                <li>Mon–Fri: 9:00 am–6:00 pm</li>
                                <li>Sat–Sun: 11:00 am–4:00 pm</li>
                              </ul>
                            </article>
                          </div> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="contact-phone-section">
                <div class="container">
                <div class="row">
                <div class="col-md-12">
               	<section class="contact-phones-wrapper">
               	<section class="contact-phone-item">
               	<?php the_field('business_development_phone_no', $post->ID); ?>
               	</section>
               	<section class="contact-phone-item">
               	<?php the_field('empanelment_phone_no', $post->ID); ?>
               	</section>
               	               	<section class="contact-phone-item">
               	<?php the_field('tpa_services_phone_no', $post->ID); ?>
               	</section>
               	               	<section class="contact-phone-item">
               	<?php the_field('corporate_services_phone_no', $post->ID); ?>
               	</section>
               	               	<section class="contact-phone-item">
               	<?php the_field('human_resource_phone_no', $post->ID); ?>
               	</section>
               	               	               	<section class="contact-phone-item">
               	<?php the_field('franchise_phone_no', $post->ID); ?>
               	</section>
               	</section>
                </div>
                </div>
                </div>
                </div>
                <div class="contact-map-wrapper">
                  <div class="footer-map">
                    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3685.6146034218796!2d88.37786791443301!3d22.5186385406253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0276cafb33be41%3A0xf5f2aec4fb834647!2s56%2C+Rajkrishna+Chatterjee+Rd%2C+Bosepukur%2C+Kasba%2C+Kolkata%2C+West+Bengal+700042!5e0!3m2!1sen!2sin!4v1447043953849" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe> -->
                    <iframe width="100%" height="400" class="contact-map wow bounceIn" frameborder="0" style="border:0; margin:0;" allowfullscreen src="https://maps.google.com/maps?q=<?php the_field('map', $post->ID); ?>&output=embed"></iframe>
                    </div>
                </div>
              </section>
          </div>

<?php 
		endwhile;
		wp_reset_postdata();
	endif;
?>
<?php 
	get_footer();
?>