<?php
	/* Template Name: Clients Page Template */
	get_header();
?>
		<?php 
		if(have_posts()):
			while(have_posts()):
				the_post();
		?>
		  <div class="site-body">
          <div class="clients-section">
            <div class="container-fluid">
              <div class="row">
                <div class="container">
                  <div class="row">
                    <div class="col-12">
                      <div class="testimonials-wrapper py-5">
                        <h2 class="text-center client-heading"><?php the_title(); ?></h2>
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

                        </section>
                      </div>
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
<?php 
	get_footer();
?>