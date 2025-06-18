<?php
get_header();
?>

<?php 
global $wp_query;
$taxonomy = $wp_query->query_vars['taxonomy'];
$term = $wp_query->query_vars['term'];
// $term = get_term_by( 'slug', get_query_var('term'), get_query_var('taxonomy') );
$term = get_term_by( 'slug', $term, $taxonomy );

?>
          <div class="banner-wrapper">
            <div class="container-fluid pr-0 pl-0">
              <div class="row">
                <div class="col-12">
                  <div class="sub-banner about-banner" id="sub-banner">
                    <div class="parallax-overlay"></div>
                    <div class="parallax-wrapper">
                      <?php 
                        $sub_banner_img_src = wp_get_attachment_image_src(get_post_thumbnail_id(),'full');
                      ?>
                      <img src="<?php echo z_taxonomy_image_url($term->term_id); ?>" class="img-fluid img-parallax" data-speed="-1" />
                      <h2><?php echo $term->name; ?></h2>
                      <p>
                        <?php echo $term->description; ?>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="site-body">
            <div class="portfolio-section-wrapper">
              <div class="container-fluid">
                  <div class="row">
                      <div class="container">
                          <div class="row">
                            <div class="col-12">
                                <div class="portfolio-header">
                                    <div class="team-header text-center">
                                        <h3><?php echo $term->name; ?> images</h3>
                                        <div class="divider divider-default"></div>
                                      </div>
                                </div>
                                <section class="section-project">
                                    <ul id="lightgallery" class="project-gallery">
<?php 
                                        $args = array(
                                         'post_type' => 'albums',
                                        'tax_query' => array(
                                            array (
                                                'taxonomy' => 'album_types',
                                                'field' => 'slug',
                                                'terms' => $term
                                            )
                                        ),
                                        'posts_per_page'   => -1,
                                        'order'     => 'ASC'
                                        // 'orderby'           => 'date'
                                        );
                                        $query = new WP_Query( $args ); 
                                        if ( $query->have_posts() ) :
                                        while ( $query->have_posts() ) :
                                        $query->the_post(); 
                                        ?>
                                          <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); 
                                          ?> 
	                                      <li class="col-xs-6 col-sm-4 col-md-3" data-src="<?php echo $image[0]; ?>" data-sub-html="<?php the_title(); ?>">
	                                        <a href="">
	                                          <figure>
	                                            <img class="img-fluid" src="<?php echo $image[0]; ?>">
	                                          </figure>
	                                          <figcaption>
	          
	                                          </figcaption>
	                                        </a>
	                                      </li>
                                          <?php
                                          endwhile; // end while
                                          wp_reset_postdata();
                                          endif; // end if
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

<?php get_footer(); ?>