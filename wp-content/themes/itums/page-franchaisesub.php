<?php
	/* Template Name: Franchise Sub-Page Template */
	get_header();
?>
<?php 
	if(have_posts()):
		while(have_posts()):
			the_post();
?>

<div class="">
    <div class="franchaise-sub-contents">
      <div class="container-fluid">
        <div class="row">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div class="team-header text-center">
                  <h3>
                    <?php
                      $overview_heading = get_field('overview_heading',$post->ID);
                      if( !empty( $overview_heading ) ): 
                      echo $overview_heading;
                      endif; ?>
                  </h3>
                  <div class="divider divider-default"></div>
                </div>
              </div>
            </div>
            <div class="row">
          		<div class="col-md-12">
          			<div class="project-info career-page-content text-center">
                    <?php
                      $overview_content = get_field('overview_content',$post->ID);
                      if( !empty( $overview_content ) ): 
                      echo $overview_content;
                      endif; ?>
                </div>
        			</div>
    			</div>
          </div>
        </div>
        <div class="row sub-franchaise-tab">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <!-- Tabs with icons on Card -->
                <div class="card card-nav-tabs">
                    <div class="card-header card-header-primary">
                        <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                        <div class="nav-tabs-navigation">
                            <div class="nav-tabs-wrapper">
                                <ul class="nav nav-tabs" data-tabs="tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#tab01" data-toggle="tab">
                                          <?php
                                            $benifits_heading = get_field('benifits_heading',$post->ID);
                                            if( !empty( $benifits_heading ) ): 
                                            echo $benifits_heading;
                                            endif; ?>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab02" data-toggle="tab">
                                          <?php
                                            $responsibilities_heading = get_field('responsibilities_heading',$post->ID);
                                            if( !empty( $responsibilities_heading ) ): 
                                            echo $responsibilities_heading;
                                            endif; ?>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab03" data-toggle="tab">
                                          <?php
                                            $eligibilities_heading = get_field('eligibilities_heading',$post->ID);
                                            if( !empty( $eligibilities_heading ) ): 
                                            echo $eligibilities_heading;
                                            endif; ?>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab04" data-toggle="tab">
                                          <?php
                                            $work_flow_heading = get_field('work_flow_heading',$post->ID);
                                            if( !empty( $work_flow_heading ) ): 
                                            echo $work_flow_heading;
                                            endif; ?>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab05" data-toggle="tab">
                                          <?php
                                            $proposal_heading = get_field('proposal_heading',$post->ID);
                                            if( !empty( $proposal_heading ) ): 
                                            echo $proposal_heading;
                                            endif; ?>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body ">
                        <div class="tab-content text-center">
                            <div class="tab-pane active" id="tab01">
                              <?php
                                $benifits_content = get_field('benifits_content',$post->ID);
                                if( !empty( $benifits_content ) ): 
                                echo $benifits_content;
                              endif; ?>
                            </div>
                            <div class="tab-pane" id="tab02">
                              <?php
                                $responsibilities_content = get_field('responsibilities_content',$post->ID);
                                if( !empty( $responsibilities_content ) ): 
                                echo $responsibilities_content;
                              endif; ?>
                            </div>
                            <div class="tab-pane" id="tab03">
                              <?php
                                $eligibilities_content = get_field('eligibilities_content',$post->ID);
                                if( !empty( $eligibilities_content ) ): 
                                echo $eligibilities_content;
                              endif; ?>
                            </div>
                            <div class="tab-pane" id="tab04">
                              <?php
                                $work_flow_content = get_field('work_flow_content',$post->ID);
                                if( !empty( $work_flow_content ) ): 
                                echo $work_flow_content;
                              endif; ?>
                            </div>
                            <div class="tab-pane" id="tab05">
                              <?php
                                $proposal_content = get_field('proposal_content',$post->ID);
                                if( !empty( $proposal_content ) ): 
                                echo $proposal_content;
                              endif; ?>
                            </div>
                        </div>
                    </div>
                  </div>
                <!-- End Tabs with icons on Card -->
              </div>
            </div>
          </div>
        </div>
        <div class="row sub-franchise-cities">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div class="team-header text-center">
                  <h3>
                    Cities under <?php echo get_the_title(); ?>
                  </h3>
                  <div class="divider divider-default"></div>
                </div>
              </div>
              <div class="col-sm-12">
                <ul class="city-list">
                  <?php 
                    $city_tags = wp_get_post_tags($post->ID);
                    foreach ( $city_tags as $city_tag ) {
                  ?>
                    <li><?php echo $city_tag->name; ?></li>
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

</div>

<?php 
		endwhile;
		wp_reset_postdata();
	endif;
?>
<?php 
	get_footer();
?>