<?php
	/* Template Name: Our Projects Page Template */
	get_header();
?>
<?php 
	if(have_posts()):
		while(have_posts()):
			the_post();
?>

<div class="site-body">

            <div class="about-row05">
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
                      <div class="col-md-12">
                        <div class="project-info text-center"><?php the_content(); ?></div>
                        <section class="section-project">
                          <ul id="lightgallery" class="project-gallery">
                          	<?php 
		                      $query_projects = new WP_Query(array(
		                        'post_type' => 'projects',
		                        'category_name' => 'our-projects',
		                        'order' => 'ASC',
		                        'posts_per_page'   => -1,
		                      ));
		                      if($query_projects->have_posts()):
		                        $counter = 1;
		                        while($query_projects->have_posts()):
		                          $query_projects->the_post();
                          	?>
                          	<?php 
                          	$project_thumbnail_src = wp_get_attachment_image_src(get_post_thumbnail_id(),'full');
                          	?>
                            <li class="col-xs-6 col-sm-4 col-md-3 project-<?php echo $counter; ?>" data-src="<?php echo $project_thumbnail_src[0]; ?>" data-sub-html="<?php the_title(); ?>">
                              <a href="">
                                <figure>
                                  <img class="img-fluid" src="<?php echo $project_thumbnail_src[0]; ?>">
                                </figure>
                                <figcaption>
								
                                </figcaption>
                              </a>
                            </li>
		                     <?php 
		                        $counter++;
		                          endwhile;
		                        wp_reset_postdata();
		                      endif;
		                     ?>
                          </ul>
                        </section>
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