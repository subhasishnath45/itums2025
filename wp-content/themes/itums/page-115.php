<?php
	/* Template Name: Our Team Page Template */
	get_header();
?>
<?php 
	if(have_posts()):
		while(have_posts()):
			the_post();
?>
		<div class="site-body">
            <div class="about-row04">
              <div class="container-fluid">
                <div class="row">
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="team-header text-center">
                          <h3><?php the_title(); ?></h3>
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
                       		'posts_per_page'   => -1,
	                    ));
	                    if($query_team->have_posts()):
	                      while($query_team->have_posts()):
	                        $query_team->the_post();
	                  ?>
	                  <div class="col-lg-3 col-md-6">
	                    <div class="team-classic team-classic-circle">
	                        <?php $team_thumbnail_src = wp_get_attachment_image_src(get_post_thumbnail_id(),'full'); ?>
	                        <figure><img class="rounded-circle img-fluid" src="<?php echo $team_thumbnail_src[0] ?>" alt="" width="300" height="300">
	                        </figure>
	                      <div class="team-classic-caption">
	                        <h5><?php the_title(); ?></h5>
	                        <p class="team-classic-job-position"><?php the_excerpt(); ?></p>
	                        <ul class="list-inline list-team">
                        		<?php if( get_field('facebook') ) { ?>
	                          <li><a href="<?php the_field('facebook', $post->ID); ?>"><i class="fab fa-facebook-f"></i></a></li>
	                      		<?php 
		                      	} 
		                      	if( get_field('twitter') ) {
		                      	?>
	                          <li><a href="<?php the_field('twitter', $post->ID); ?>"><i class="fab fa-twitter"></i></a></li>
	                      		<?php 
		                      	} 
		                      	if( get_field('instagram') ) {
		                      	?>
	                          <li><a href="<?php the_field('instagram', $post->ID); ?>"><i class="fab fa-instagram"></i></a></li>
	                      		<?php 
		                      	} 
		                      	if( get_field('google_plus') ) {
		                      	?>
	                          <li><a href="<?php the_field('google_plus', $post->ID); ?>"><i class="fab fa-google-plus-g"></i></a></li>
	                      		<?php 
		                      	} 
		                      	if( get_field('linkedin') ) {
		                      	?>
	                          <li><a href="<?php the_field('linkedin', $post->ID); ?>"><i class="fab fa-linkedin-in"></i></a></li>
	                      		<?php } ?>
	                        </ul>
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