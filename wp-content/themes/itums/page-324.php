<?php
	/* Template Name: Book Appointment Page Template */
	get_header('appointment');
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
          			<div class="project-info service-page-content text-center"><?php the_content(); ?></div>
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
	get_footer('appointment');
?>