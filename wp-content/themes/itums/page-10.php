<?php
	/* Template Name: About Page Template */
	get_header();
?>
    <?php 
    if(have_posts()):
      while(have_posts()):
        the_post();
    ?>
          <div class="">
            <div class="about-row01" id="about-us">
                <div class="container-fluid">
                    <div class="row">
                        <div class="container">
                            <div class="row">
                            <div class="col-12">
                                <div class="about-wrapper">
                                <div class="about-txt">
                                    <?php the_field('about_us_text', $post->ID); ?>        
                                </div>
                                <div class="featured">
                                  <?php 
                                    $about_section_img = get_field('about_us_image', $post->ID);
                                  ?>
                                    <img src="<?php echo $about_section_img['url']; ?>" class="img-fluid" />
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-row06" id="about-history">
              <div class="container-fluid">
                <div class="row">
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="history-header text-center">
                          <h3><?php echo get_the_title( 123 ); ?></h3>
                          <div class="divider divider-default"></div>
                        </div>
                      </div>
                    </div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="timeline-wrapper">
                    <section id="cd-timeline" class="cd-container cssanimations">
                    <?php 
                      $query_history = new WP_Query(array(
                        'post_type' => 'history',
                        'category_name' => 'our-history',
                        'order' => 'ASC',
                          'posts_per_page'   => -1,
                      ));
                      if($query_history->have_posts()):
                        $counter = 1;
                        while($query_history->have_posts()):
                          $query_history->the_post();
                    ?>
                      <div class="cd-timeline-block">
                        <div class="cd-timeline-img <?php echo 'cd-'.$counter ?>">
                          <?php $history_thumbnail_src = wp_get_attachment_image_src(get_post_thumbnail_id(),'full'); ?>
                          <img src="<?php echo $history_thumbnail_src[0] ?>" alt="Picture">
                        </div> <!-- cd-timeline-img -->
                  
                        <div class="cd-timeline-content">
                          <h2><?php the_title(); ?></h2>
                          <section><?php the_content(); ?></section>
                          <!-- <a href="#0" class="cd-read-more">Read more</a> -->
                          <span class="cd-date"><?php the_excerpt(); ?></span>
                        </div> <!-- cd-timeline-content -->
                      </div> <!-- cd-timeline-block -->
                     <?php 
                        $counter++;
                          endwhile;
                        wp_reset_postdata();
                      endif;
                     ?>
                    </section> <!-- cd-timeline -->
                  </div>
                </div>
              </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="about-row02" id="about-mission">
                <div class="container-fluid">
                    <div class="row">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <ul class="about-list">
                                    <?php 
                                      $m1 = get_field('our_mission_field', $post->ID); 
                                      if ( ! empty ( $m1 ) ){
                                    ?>
                                        <li>
                                          <?php echo $m1; ?>
                                        </li>
                                        <?php 
                                      }
                                        ?>
                                    <?php 
                                      $m2 = get_field('our_vision_field', $post->ID); 
                                      if ( ! empty ( $m2 ) ){
                                    ?>
                                        <li>
                                          <?php echo $m2; ?>
                                        </li>
                                        <?php 
                                      }
                                        ?>
                                    <?php 
                                      $m3 = get_field('how_we_work_field', $post->ID); 
                                      if ( ! empty ( $m3 ) ){
                                    ?>
                                        <li>
                                          <?php echo $m3; ?>
                                        </li>
                                        <?php 
                                      }
                                        ?>
                                    <?php 
                                      $m4 = get_field('our_beliefs_field', $post->ID); 
                                      if ( ! empty ( $m4 ) ){
                                    ?>
                                        <li>
                                          <?php echo $m4; ?>
                                        </li>
                                        <?php 
                                      }
                                        ?>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-row03" id="why-us">
              <div class="container-fluid">
                <div class="row">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="counter-wrap">
                          <!-- <div class="reputation-icon-wrapper">
                            <i class="far fa-thumbs-up"></i>
                          </div>
                          <div class="about-counter-wrapper">
                            <span class="counter01">15</span>
                          </div>
                          <div class="counter-title">
                            <h3>years of domain expertise</h3>
                          </div>
                          <div class="divider divider01">
                          </div>
                          <div class="counter-exeption">
                            Being a pioneer in the field of healthcare with over 15 years of domain expertise, our team works closely with Insurance companies and Third Party Administrators (TPAs) to provide end-to-end management services to both hospitals and patients, starting from processing personal insurance documents to recovery of health insurance claims by following a strategic workflow. 
                          </div> -->
                          <?php the_field('domain_expertise_field', $post->ID); ?>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="counter-wrap">
<!--                           <div class="reputation-icon-wrapper">
                            <i class="fas fa-user-friends"></i>
                          </div>
                          <div class="about-counter-wrapper">
                            <span class="counter02">23</span>
                          </div>
                          <div class="counter-title">
                            <h3>Qualified Employees</h3>
                          </div>
                          <div class="divider divider01">

                          </div>
                          <div class="counter-exeption">
                            Being a pioneer in the field of healthcare with over 15 years of domain expertise, our team works closely with Insurance companies and Third Party Administrators (TPAs) to provide end-to-end management services to both hospitals and patients, starting from processing personal insurance documents to recovery of health insurance claims by following a strategic workflow. 
                          </div> -->
                          <?php the_field('employees_field', $post->ID); ?>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="counter-wrap">
<!--                           <div class="reputation-icon-wrapper">
                            <i class="fas fa-tasks"></i>
                          </div>
                          <div class="about-counter-wrapper">
                            <span class="counter03">200</span>
                          </div>
                          <div class="counter-title">
                            <h3>Successful Projects</h3>
                          </div>
                          <div class="divider divider01">

                          </div>
                          <div class="counter-exeption">
                            Being a pioneer in the field of healthcare with over 15 years of domain expertise, our team works closely with Insurance companies and Third Party Administrators (TPAs) to provide end-to-end management services to both hospitals and patients, starting from processing personal insurance documents to recovery of health insurance claims by following a strategic workflow. 
                          </div> -->
                          <?php the_field('projects_field', $post->ID); ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="about-row04" id="about-team">
              <div class="container-fluid">
                <div class="row">
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="team-header text-center">
                          <h3><?php echo get_the_title( 115 ); ?></h3>
                          <div class="divider divider-default"></div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                    <?php 
                      $query_team = new WP_Query(array(
                        'post_type' => 'team',
                        'category_name' => 'our-team',
                        'order' => 'ASC',
                          'posts_per_page'   => 3,
                      ));
                      if($query_team->have_posts()):
                        while($query_team->have_posts()):
                          $query_team->the_post();
                    ?>
                    <div class="col-lg-4 col-md-6">
                      <div class="team-classic team-classic-circle">
                        <?php $team_thumbnail_src = wp_get_attachment_image_src(get_post_thumbnail_id(),'full'); ?>
                        <figure><img class="rounded-circle img-fluid" src="<?php echo $team_thumbnail_src[0] ?>" alt="" width="300" height="300">
                        </figure>
                        <div class="team-classic-caption">
                          <h5><?php the_title(); ?></h5>
                          <p class="team-classic-job-position"><?php the_excerpt(); ?></p>
                          <!-- <ul class="list-inline list-team">
                            <?php //if( get_field('facebook') ) { ?>
                            <li><a href="<?php //the_field('facebook', $post->ID); ?>"><i class="fab fa-facebook-f"></i></a></li>
                            <?php 
                            // } 
                            // if( get_field('twitter') ) {
                            ?>
                            <li><a href="<?php// the_field('twitter', $post->ID); ?>"><i class="fab fa-twitter"></i></a></li>
                            <?php 
                            // } 
                            // if( get_field('instagram') ) {
                            ?>
                            <li><a href="<?php// the_field('instagram', $post->ID); ?>"><i class="fab fa-instagram"></i></a></li>
                            <?php 
                            // } 
                            // if( get_field('google_plus') ) {
                            ?>
                            <li><a href="<?php// the_field('google_plus', $post->ID); ?>"><i class="fab fa-google-plus-g"></i></a></li>
                            <?php 
                            // } 
                            // if( get_field('linkedin') ) {
                            ?>
                            <li><a href="<?php// the_field('linkedin', $post->ID); ?>"><i class="fab fa-linkedin-in"></i></a></li>
                            <?php// } ?>
                          </ul> -->
                        </div>
                      </div>
                    </div>
                     <?php 
                          endwhile;
                        wp_reset_postdata();
                      endif;
                     ?>
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
<?php 
	get_footer();
?>