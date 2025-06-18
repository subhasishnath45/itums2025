<?php
	/* Template Name: Front Page Template */
	get_header();
?>

          <div class="site-body">
            <?php 
              $query_home_page = new WP_Query( array( 'page_id' => 7 ) );
              if($query_home_page -> have_posts()):
                while($query_home_page -> have_posts()):
                  $query_home_page -> the_post();
            ?>
            <div class="container-fluid">
              <div class="row">
                <div class="container">
                    <div class="row">
                      <div class="col-12">
                        <div class="about-wrapper">
                          <div class="about-txt">
                            <?php 
                            $about_brief = get_field('about_section_text', $post->ID);
                            if(!empty($about_brief)):
                              echo $about_brief;
                            endif;
                            ?>
  
                          </div>
                          <div class="featured">
                            <?php 
                              $about_section_img = get_field('about_section_image', $post->ID);
                            ?>
                            <img src="<?php echo $about_section_img['url']; ?>" class="img-fluid" />
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="about-section-wrapper">
              <div class="container-fluid">
                <div class="row">
                  <div class="container">
                    <div class="row">
                    <div class="col-12">
                        <div class="service-wrapper">
                          <div class="team-header text-center">
                            <h3><?php echo get_the_title(158); ?></h3>
                            <div class="divider divider-default"></div>
                          </div>
                          <ul>
                            <li>
                              <a href="http://itums.co.in/itums/our-solutions/#service01" target="_blank">
                              <section class="service-each thumbnail-classic">
                                <div class="thumbnail-classic-icon">
                                  <i class="fas fa-hospital"></i>
                                </div>
                                <?php the_field('solution_section_1', $post->ID); ?>
                              </section>
                              </a>
                            </li>
                            <li>
                              <a href="http://itums.co.in/itums/our-solutions/#service02" target="_blank">
                              <section class="service-each thumbnail-classic">
                                <div class="thumbnail-classic-icon">
                                  <i class="fas fa-umbrella"></i>
                                </div>
                                <?php the_field('solution_section_2', $post->ID); ?>
                              </section>
                              </a>
                            </li>
                            <li>
                              <a href="http://itums.co.in/itums/our-solutions/#service03" target="_blank">
                              <section class="service-each thumbnail-classic">
                                <div class="thumbnail-classic-icon">
                                  <i class="fas fa-procedures"></i>
                                </div>
                                <?php the_field('solution_section_3', $post->ID); ?>
                              </section>
                              </a>
                            </li>
                            <li>
                              <a href="http://itums.co.in/itums/our-solutions/#service04" target="_blank">
                              <section class="service-each thumbnail-classic">
                                <div class="thumbnail-classic-icon">
                                  <!-- <i class="fas fa-ambulance"></i> -->
                                  <span class="material-icons">
                                    airline_seat_recline_extra
                                  </span>
                                </div>
                                <?php the_field('solution_section_4', $post->ID); ?>
                              </section>
                              </a>
                            </li>

                          </ul>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="solution-wrapper">
                          <div class="team-header text-center">
                            <h3><?php echo get_the_title(303); ?></h3>
                            <div class="divider divider-default"></div>
                          </div>
                          <ul>
                            <li>
                              <a href="http://itums.co.in/itums/our-services/#service01" target="_blank">
                              <section class="service-each thumbnail-classic">
                                <div class="thumbnail-classic-icon">
                                  <!-- <i class="fas fa-tasks"></i> -->
                                  <span class="material-icons">
                                    chrome_reader_mode
                                  </span>
                                </div>
                                <?php the_field('service_section_01', $post->ID); ?>
                              </section>
                              </a>
                            </li>
                            <li>
                              <a href="http://itums.co.in/itums/our-services/#service02" target="_blank">
                              <section class="service-each thumbnail-classic">
                                <div class="thumbnail-classic-icon">
                                  <!-- <i class="fas fa-tasks"></i> -->
                                  <span class="material-icons">
                                    horizontal_split
                                  </span>
                                </div>
                                <?php the_field('service_section_2', $post->ID); ?>
                              </section>
                              </a>
                            </li>
                            <li>
                              <a href="http://itums.co.in/itums/our-services/#service03" target="_blank">
                              <section class="service-each thumbnail-classic">
                                <div class="thumbnail-classic-icon">
                                  <!-- <i class="fas fa-tasks"></i> -->
                                  <span class="material-icons">
                                    assessment
                                  </span>
                                </div>
                                <?php the_field('service_section_3', $post->ID); ?>
                              </section>
                              </a>
                            </li>
                            <li>
                              <a href="http://itums.co.in/itums/our-services/#service04" target="_blank">
                              <section class="service-each thumbnail-classic">
                                <div class="thumbnail-classic-icon">
                                  <i class="fas fa-bullhorn"></i>
                                </div>
                                <?php the_field('service_section_4', $post->ID); ?>
                              </section>
                              </a>
                            </li>
                            <li>
                              <a href="http://itums.co.in/itums/our-services/#service05" target="_blank">
                              <section class="service-each thumbnail-classic">
                                <div class="thumbnail-classic-icon">
                                  <!-- <i class="fas fa-ambulance"></i> -->
                                  <span class="material-icons">
                                    commute
                                  </span>
                                </div>
                                <?php the_field('service_section_5', $post->ID); ?>
                              </section>
                              </a>
                            </li>
                            <li>
                              <a href="http://itums.co.in/itums/our-services/#service06" target="_blank">
                              <section class="service-each thumbnail-classic">
                                <div class="thumbnail-classic-icon">
                                  <i class="fas fa-ambulance"></i>
                                </div>
                                <?php the_field('service_section_6', $post->ID); ?>
                              </section>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php 
              endwhile;
              wp_reset_postdata();
              endif;
            ?>
            <div class="testimonial-section">
              <div class="container-fluid">
                <div class="row">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-12 col-lg-6 offset-lg-3">
                        <div class="testimonials-wrapper customer-feedback py-5">
                          <h2 class="mb-5 text-center testimonial-heading">testimonials</h2>
                          <div class="owl-carousel-testimonials owl-carousel">
            <?php 
              $query_testimonial = new WP_Query(array(
                'post_type' => 'testimonials',
                'category_name' => 'testimonials',
                'order' => 'ASC'
              ));
              if($query_testimonial -> have_posts()):
                while($query_testimonial -> have_posts()):
                  $query_testimonial -> the_post();
            ?>
						<!-- slider item -->
						<div class="feedback-slider-item">
              <?php 
              $testimonial_img_src = wp_get_attachment_image_src(get_post_thumbnail_id(),'full');
              ?>
							<img src="<?php echo $testimonial_img_src[0]; ?>" class="center-block img-circle" alt="Customer Feedback">
							<h3 class="customer-name"><?php the_title(); ?></h3>
              <small><?php the_excerpt(); ?></small>
							<p><?php the_content(); ?></p>
						</div>
						<!-- /slider item -->
            <?php 
              endwhile;
              wp_reset_postdata();
              endif;
            ?>

                          </div>
					<!-- side thumbnail -->
					<div class="feedback-slider-thumb hidden-xs">
						<div class="thumb-prev">
            <?php 
              $query_testimonial_first = new WP_Query(array(
                'post_type' => 'testimonials',
                'category_name' => 'testimonials',
                'showposts' => 1,
                'post_status' => 'publish',
                'order' => 'ASC',
                'orderby'=>'ID',
                'offset'        => 1,
              ));
              if($query_testimonial_first -> have_posts()):
                while($query_testimonial_first -> have_posts()):
                  $query_testimonial_first -> the_post();
            ?>
							<span>
                <?php $first_img_src = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full'); ?>
								<img src="<?php echo $first_img_src[0]; ?>" alt="Customer Feedback">
							</span>
            <?php 
              endwhile;
              wp_reset_postdata();
              endif;
            ?>
						</div>

						<div class="thumb-next">
            <?php 
              $query_testimonial_last = new WP_Query(array(
                'post_type' => 'testimonials',
                'category_name' => 'testimonials',
                'showposts' => 1,
                'post_status' => 'publish',
                'order' => 'DESC',
                'orderby'=>'ID'
              ));
              if($query_testimonial_last -> have_posts()):
                while($query_testimonial_last -> have_posts()):
                  $query_testimonial_last -> the_post();
            ?>
							<span>
                <?php $last_img_src = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full'); ?>
								<img src="<?php echo $last_img_src[0]; ?>" alt="Customer Feedback">
							</span>
            <?php 
              endwhile;
              wp_reset_postdata();
              endif;
            ?>
						</div>
					</div>
					<!-- /side thumbnail -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>


          <div class="clients-section">
            <div class="container-fluid">
              <div class="row">
                <div class="container">
                  <div class="row">
                    <div class="col-12">
                      <div class="testimonials-wrapper py-5">
                      <!--   <h2 class="text-center client-heading"><?php echo get_the_title( 56 ); ?></h2>
                        <section class="customer-logos slider">
                          <?php 
                            $query_clients = new WP_Query(array(
                              'post_type' => 'clients',
                              'category_name' => 'our-clients',
                              'order' => 'ASC',
                               'posts_per_page'   => -1,
                            ));
                            if($query_clients->have_posts()):
                              while($query_clients->have_posts()):
                                $query_clients->the_post();
                          ?>
                           <div class="slide">
                            <?php 
                            $client_logo = wp_get_attachment_image_src(get_post_thumbnail_id(),'full');
                            ?>
                            <img src="<?php echo $client_logo[0] ?>" class="img-fluid profile-pic mb-4 mt-3"/>
                          </div>
                           <?php 
                                endwhile;
                              wp_reset_postdata();
                            endif;
                           ?>

                        </section> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          </div>

<?php 
	get_footer();
?>