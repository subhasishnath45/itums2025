          <div class="banner-wrapper">
            <div class="container-fluid pr-0 pl-0">
              <div class="row">
                <div class="col-12">
                  <div id="slides">
                    <ul class="slides-container">
                      <?php 
                      $query_object_homeSlider_first = new WP_Query(array(
                        'post_type' => 'home_slider',
                        'showposts' => 1,
                        'post_status' => 'publish',
                        'order' => 'ASC',
                        'orderby'=>'ID',
                        'cat' => 4
                      ));
                      if($query_object_homeSlider_first->have_posts()):
                        $not_in_next_four = array(); 
                        while ($query_object_homeSlider_first->have_posts()):
                          $query_object_homeSlider_first->the_post();
                      ?>

                      <li>
                        <div class="slider-item">
                          <figure>
                            <?php 
                            $slider_img_src = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                            ?>
                            <img src="<?php echo $slider_img_src[0] ?>" class="img-fluid" />
                            <figcaption>
                              <div class="slide-text slide-text-only-img">
                                <h1>
                                  <?php the_title(); ?>
                                </h1>
                                <p><?php the_content(); ?></p>
                              </div>
                              <div class="slide-video-empty">
                                
                              </div>
                            </figcaption>
                          </figure>
                        </div>
                        </li>
                    <?php $not_in_next_four[] = get_the_ID(); ?>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                    <?php 
                        $query_object_homeSlider_rest = new WP_Query(array(
                          'post_type' => 'home_slider',
                          'post_status' => 'publish',
                          'order' => 'ASC',
                          'orderby'=>'ID',
                          'post__not_in'=>$not_in_next_four,
                          'showposts' => 4,
                          'cat' => 4
                       ));
                        if($query_object_homeSlider_rest->have_posts()):
                          while ($query_object_homeSlider_rest->have_posts()):
                            $query_object_homeSlider_rest->the_post();
                    ?>
                      <li>
                        <div class="slider-item slide-item-sub">
                          <figure>
                            <?php 
                              $slider_img_src2 = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                            ?>
                            <img src="<?php echo $slider_img_src2[0] ?>" class="img-fluid" />
                            <figcaption>
                              <div class="slide-text slide-text-only-img">
                                <h1>
                                  <?php the_title(); ?>
                                </h1>
                                <p><?php the_content(); ?></p>
                              </div>
                              <div class="slide-video-empty">
                                
                              </div>
                            </figcaption>
                          </figure>
                        </div>
                      </li>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
<!--                       <li>
                        <img src="<?php //echo get_template_directory_uri(); ?>/img/slide-02.jpeg" class="img-fluid" />
                      </li>
                      <li>
                        <img src="<?php //echo get_template_directory_uri(); ?>/img/slide-03.jpeg" class="img-fluid" />
                      </li> -->
                    </ul>
                    <nav class="slides-navigation">
                      <a href="#" class="next">Next</a>
                      <a href="#" class="prev">Previous</a>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
          </div>