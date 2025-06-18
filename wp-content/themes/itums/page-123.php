<?php
	/* Template Name: Our History Page Template */
	get_header();
?>
<?php 
	if(have_posts()):
		while(have_posts()):
			the_post();
?>

	<div class="site-body">
	    <div class="about-row06">
	      <div class="container-fluid">
	        <div class="row">
	          <div class="container">
	            <div class="row">
	              <div class="col-sm-12">
	                <div class="history-header text-center">
	                  <h3><?php the_title(); ?></h3>
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
	                        <p><?php the_content(); ?></p>
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
	</div>

<?php 
		endwhile;
		wp_reset_postdata();
	endif;
?>
<?php 
	get_footer();
?>