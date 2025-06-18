          <div class="banner-wrapper">
            <div class="container-fluid pr-0 pl-0">
              <div class="row">
                <div class="col-12">
                  <div class="sub-banner about-banner" id="sub-banner">
                    <div class="parallax-overlay"></div>
                    <div class="parallax-wrapper">
                      <?php 
                      if(have_posts()):
                        while(have_posts()): the_post();
                      ?>
                      <?php 
                        $sub_banner_img_src = wp_get_attachment_image_src(get_post_thumbnail_id(),'full');
                      ?>
                      <img src="<?php echo $sub_banner_img_src[0] ?>" class="img-fluid img-parallax" data-speed="-1" />
                      <h2><?php the_title(); ?></h2>
                      <?php if ( ! has_excerpt() ) { ?>
                          <?php echo ''; ?>
                      <?php } else{ ?>
                        <p>
                          <?php the_excerpt(); ?>
                        </p>
                      <?php } ?>
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