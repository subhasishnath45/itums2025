<?php
	/* Template Name: Career Page Template */
	get_header();
?>
<?php 
	if(have_posts()):
		while(have_posts()):
			the_post();
?>

<div class="career-body">
    <div class="">
      <div class="container-fluid">
        <!--<div class="row career-row-01">-->
        <!--
        	<div class="clip01">
        		
        	</div>
        	<div class="clip02">
        		
        	</div>-->
<!--           <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div class="team-header text-center">
                  <h3><?php //the_title(); ?></h3>
                  <div class="divider divider-default"></div>
                </div>
              </div>
            </div>

  			<div class="row">
  				<div class="col-md-6">
  					<div class="work_for_text">
						<?php

						// if(get_field('work_for_us_text',$post->ID))
						// {
						// 	echo '<p>' . get_field('work_for_us_text',$post->ID) . '</p>';
						// }

						?>
  					</div>
  				</div>
  				<div class="col-md-6">
  					<div class="work_for_us_img_wrapper">
					<?php 
					// $image_work_for_us = get_field('work_for_us_image',$post->ID);
					// if( !empty( $image_work_for_us ) ): 
					?>
					    <img src="<?php// echo esc_url($image_work_for_us['url']); ?>" class="img-fluid" alt="<?php// echo esc_attr($image_work_for_us['alt']); ?>" />
					<?php// endif; ?>
  					</div>

  				</div>
  			</div>
          </div> -->
        <!--</div>-->
        <div class="row career-row-02">
        	<div class="container">
        		<div class="row perks-row-01">
        			<div class="col-md-12">
		                <div class="team-header text-center">
		                  <h3>WE OFFER THE FOLLOWING PERKS:</h3>
		                  <div class="divider divider-default"></div>
		                </div>
        			</div>
        			<div class="col-md-4">
						<div class="perks_image_01">
							<?php 
							$perks_image_01 = get_field('perks_image_01',$post->ID);
							if( !empty( $perks_image_01 ) ): ?>
							    <img src="<?php echo esc_url($perks_image_01['url']); ?>" class="" alt="<?php echo esc_attr($perks_image_01['alt']); ?>" />
							<?php endif; ?>
				        	<div class="clip03">
				        		
				        	</div>
						</div>
        			</div>
        			<div class="col-md-8">
        				<div class="perks-content">
        					<ul>
        						<li class="perk-li">
									<div class="perk-icon">
										<?php 
										$perks_icon_01 = get_field('perk_icon_01',$post->ID);
										if( !empty( $perks_icon_01 ) ): ?>
										    <img src="<?php echo esc_url($perks_icon_01['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($perks_icon_01['alt']); ?>" />
										<?php endif; ?>

									</div>
									<div class="perk-text">
										<?php 
										$perks_text_01 = get_field('perk_text_01',$post->ID);
										echo $perks_text_01;
										?>
									</div>
        						</li>
        						<li class="perk-li">
									<div class="perk-icon">
										<?php 
										$perk_icon_2 = get_field('perk_icon_2',$post->ID);
										if( !empty( $perk_icon_2 ) ): ?>
										    <img src="<?php echo esc_url($perk_icon_2['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($perk_icon_2['alt']); ?>" />
										<?php endif; ?>

									</div>
									<div class="perk-text">
										<?php 
										$perk_text_2 = get_field('perk_text_2',$post->ID);
										echo $perk_text_2;
										?>
									</div>
        						</li>
        						<li class="perk-li">
									<div class="perk-icon">
										<?php 
										$perk_icon_3 = get_field('perk_icon_3',$post->ID);
										if( !empty( $perk_icon_3 ) ): ?>
										    <img src="<?php echo esc_url($perk_icon_3['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($perk_icon_3['alt']); ?>" />
										<?php endif; ?>

									</div>
									<div class="perk-text">
										<?php 
										$perk_text_3 = get_field('perk_text_3',$post->ID);
										echo $perk_text_3;
										?>
									</div>
        						</li>
        						<li class="perk-li">
									<div class="perk-icon">
										<?php 
										$perk_icon_4 = get_field('perk_icon_4',$post->ID);
										if( !empty( $perk_icon_4 ) ): ?>
										    <img src="<?php echo esc_url($perk_icon_4['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($perk_icon_4['alt']); ?>" />
										<?php endif; ?>

									</div>
									<div class="perk-text">
										<?php 
										$perk_text_4 = get_field('perk_text_4',$post->ID);
										echo $perk_text_4;
										?>
									</div>
        						</li>
        					</ul>
        				</div>
        			</div>
        		</div>
        		<hr/>
        		<div class="row perks-row-01">
        			<div class="col-md-8">
        				<div class="perks-content02">
        					<ul>
        						<li class="perk-li">
									<div class="perk-icon">
										<?php 
										$perk_icon_5 = get_field('perk_icon_5',$post->ID);
										if( !empty( $perk_icon_5 ) ): ?>
										    <img src="<?php echo esc_url($perk_icon_5['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($perk_icon_5['alt']); ?>" />
										<?php endif; ?>

									</div>
									<div class="perk-text">
										<?php 
										$perk_text_5 = get_field('perk_text_5',$post->ID);
										echo $perk_text_5;
										?>
									</div>
        						</li>
        						<li class="perk-li">
									<div class="perk-icon">
										<?php 
										$perk_icon_6 = get_field('perk_icon_6',$post->ID);
										if( !empty( $perk_icon_6 ) ): ?>
										    <img src="<?php echo esc_url($perk_icon_6['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($perk_icon_6['alt']); ?>" />
										<?php endif; ?>

									</div>
									<div class="perk-text">
										<?php 
										$perk_text_6 = get_field('perk_text_6',$post->ID);
										echo $perk_text_6;
										?>
									</div>
        						</li>
        						<li class="perk-li">
									<div class="perk-icon">
										<?php 
										$perk_icon_7 = get_field('perk_icon_7',$post->ID);
										if( !empty( $perk_icon_7 ) ): ?>
										    <img src="<?php echo esc_url($perk_icon_7['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($perk_icon_7['alt']); ?>" />
										<?php endif; ?>

									</div>
									<div class="perk-text">
										<?php 
										$perk_text_7 = get_field('perk_text_7',$post->ID);
										echo $perk_text_7;
										?>
									</div>
        						</li>
        						<li class="perk-li">
									<div class="perk-icon">
										<?php 
										$perk_icon_8 = get_field('perk_icon_8',$post->ID);
										if( !empty( $perk_icon_8 ) ): ?>
										    <img src="<?php echo esc_url($perk_icon_8['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($perk_icon_8['alt']); ?>" />
										<?php endif; ?>

									</div>
									<div class="perk-text">
										<?php 
										$perk_text_8 = get_field('perk_text_8',$post->ID);
										echo $perk_text_8;
										?>
									</div>
        						</li>
        					</ul>
        				</div>
        			</div>
        			<div class="col-md-4">
						<div class="perks_image_02">
							<?php 
							$perks_image_2 = get_field('perks_image_2',$post->ID);
							if( !empty( $perks_image_2 ) ): ?>
							    <img src="<?php echo esc_url($perks_image_2['url']); ?>" class="" alt="<?php echo esc_attr($perks_image_2['alt']); ?>" />
							<?php endif; ?>
				        	<div class="clip03">
				        		
				        	</div>
						</div>
        			</div>
        		</div>
    		</div>
        </div>
        <div class="row career-row-04">
        	<div class="container">
        		<div class="row">
        			<div class="col-md-12">
		                <div class="team-header text-center">
		                  <h3>OUR APPLICATION PROCESS:</h3>
		                  <div class="divider divider-default"></div>
		                </div>
        			</div>
        			<div class="col-md-12">
        				<ul class="application-process">
        					<li>
        						<div class="application-step-1">
        							<div class="application_icon">
										<?php 
										$application_process_icon_01 = get_field('application_process_icon_01',$post->ID);
										if( !empty( $application_process_icon_01 ) ): ?>
										    <img src="<?php echo esc_url($application_process_icon_01['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($application_process_icon_01['alt']); ?>" />
										<?php endif; ?>
        							</div>
        							<div class="application-process-content">
										<?php

										if(get_field('application_process_text_01',$post->ID))
										{
											echo get_field('application_process_text_01',$post->ID);
										}

										?>
        							</div>
        						</div>
        					</li>
        					<li>
        						<div class="application-step-2">
        							<div class="application_icon">
										<?php 
										$application_process_icon_2 = get_field('application_process_icon_2',$post->ID);
										if( !empty( $application_process_icon_2 ) ): ?>
										    <img src="<?php echo esc_url($application_process_icon_2['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($application_process_icon_2['alt']); ?>" />
										<?php endif; ?>
        							</div>
        							<div class="application-process-content">
										<?php

										if(get_field('application_process_text_2',$post->ID))
										{
											echo get_field('application_process_text_2',$post->ID);
										}

										?>
        							</div>
        						</div>
        					</li>
        					<li>
        						<div class="application-step-3">
        							<div class="application_icon">
										<?php 
										$application_process_icon_3 = get_field('application_process_icon_3',$post->ID);
										if( !empty( $application_process_icon_3 ) ): ?>
										    <img src="<?php echo esc_url($application_process_icon_3['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($application_process_icon_3['alt']); ?>" />
										<?php endif; ?>
        							</div>
        							<div class="application-process-content">
										<?php

										if(get_field('application_process_text_3',$post->ID))
										{
											echo get_field('application_process_text_3',$post->ID);
										}

										?>
        							</div>
        						</div>
        					</li>
        				</ul>
        			</div>
        		</div>
        	</div>
        </div>
        <div class="row career-row-05">
        	<div class="container">
        		<div class="row">
        			<div class="col-md-12">
						<h2 class="mb-5 text-center emp-testimonial-heading">employee testimonials</h2>
    				</div>
    				<div class="col-md-10 offset-md-1 emp-testimonial-content">
						<div class="owl-carousel-emp-testimonials owl-carousel owl-theme">
			            <?php 
			              $query_testimonial = new WP_Query(array(
			                'post_type' => 'testimonials',
			                'category_name' => 'employee-testimonials',
			                'order' => 'ASC'
			              ));
			              if($query_testimonial -> have_posts()):
			                while($query_testimonial -> have_posts()):
			                  $query_testimonial -> the_post();
			            ?>
							<div class="emp-feedback-slider-item">
								
								<p><?php the_content(); ?></p>
								<h3 class="customer-name"><?php the_title(); ?></h3>
								<small><?php the_excerpt(); ?></small>
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
        <div class="row career-row-03">
        	<div class="container">
            <div class="row">
        		<div class="col-md-12">
          			<h3><?php the_content(); ?></h3>
      			</div>
  			</div>
  			<div class="all-available-jobs">
  				<?php 
                  $query_jobs = new WP_Query(array(
                    'post_type' => 'jobs',
                    'category_name' => 'all-jobs',
                    'order' => 'ASC',
                    'posts_per_page'   => -1,
                  ));
                  if($query_jobs->have_posts()):
                    $counter = 1;
                    while($query_jobs->have_posts()):
                      $query_jobs->the_post();
  				?>
					  <div class="row job-row job-row-<?php echo $counter; ?>">
						<div class="col-md-5">
				 			<div class="job-info-column">
					 			<h2><?php the_title(); ?></h2>
				 			</div>
				 		</div>
				 		<div class="col-md-4">
				 			<div class="job-location-column">
					 			<?php the_content(); ?>
				 			</div>
				 		</div>
				 		<div class="col-md-3">
				 			<div class="job-apply-column">
				 				<a href="<?php echo site_url('/career-form/'); ?>" target="_blank" class="apply-btn">Apply</a>
				 			</div>
				 		</div>
					  </div>

								<?php 
									$job_desc = get_field('job_description', $post->ID); 
									if ( ! empty ( $job_desc ) ){
								?>
					  			<div class="row">
									<div class="col-12">
										<div class="job-desc text-justify">
								<?php	 
									echo $job_desc;
								?>
										</div>
									</div>
								</div>
								<?php
								 }
								 ?>

	             <?php 
	                $counter++;
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