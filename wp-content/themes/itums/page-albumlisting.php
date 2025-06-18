<?php
/**
 * Template Name: Album Listing
 * This file lists taxonomies on a page. Based on http://codex.wordpress.org/Function_Reference/get_term_link
 *
 * @author Subhasish Nath
 * @link http://subhasishlive.com
 */
get_header();
?>
<?php 
	if(have_posts()):
		while(have_posts()):
			the_post();
?>
          <div class="">
              <div class="portfolio-section-wrapper">
                <div class="container-fluid">
                    <div class="row photo-gallery-row">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="portfolio-header">
                                        <div class="team-header text-center">
                                            <h3>Image Gallery</h3>
                                            <div class="divider divider-default"></div>
                                          </div>
                                    </div>
                                    <div class="portfolio-body">
                                        <div class="grid">
                                            <?php 
                                            $i = 0;
											$taxonomies = get_terms( array(
											           'taxonomy' => 'album_types',
											            'orderby' => 'name',
                                                         'order' => 'DESC',
											             'hide_empty' => false
											      ) );
											      if ( !empty($taxonomies) ) :
											         foreach( $taxonomies as $album ) {
                                                        
                                        	?>
                                            <div class="grid-item photo-album-<?php echo $i; ?>">
                                                <?php $term_link = get_term_link( $album ); ?>
                                                <a href="<?php echo esc_url( $term_link ); ?>" class="image-thimbnail-var-01">
                                                    <img src="<?php echo z_taxonomy_image_url($album->term_id); ?>" class="img-fluid"/>
                                                    <span class="label-custom label-white">Album</span>
                                                    <div class="caption">
                                                        <i class="far fa-folder"></i>
                                                        <ul>
                                                            <li class="post-count"><?php echo $album->count; ?> images</li>
                                                        </ul>
                                                        <h4 class="album-cat-name"><?php echo $album->description; ?></h4>
                                                        <div class="divider"></div>
                                                        <p class="small hover-bottom-element">
                                                            <?php echo $album->name;?>
                                                        </p>
                                                        <div class="more-arrow">
                                                            <i class="fas fa-arrow-right"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <?php 
                                                $i++;
	                                            }
	                                        endif;
	                                        ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row video-gallery-row">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 video album-wrapper">
                                        <div class="team-header text-center">
                                            <h3>Video Gallery</h3>
                                            <div class="divider divider-default"></div>
                                          </div>
                                        <div class="video-album-wrapper">
                                            <?php echo do_shortcode("[elfsight_youtube_gallery id=\"1\"]"); ?>
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
<?php get_footer(); ?>
