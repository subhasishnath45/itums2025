          <div class="menu-wrapper">
            <div class="container-fluid">
              <div class="row">
                <nav class="main-nav navbar navbar-expand-md">

                  <!-- Toggler/collapsibe Button -->
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbars">
                    <i class="fas fa-bars"></i>
                    <!-- <span class="navbar-toggler-icon"></span> -->
                  </button>
<!--                   <div class="collapse navbar-collapse" id="navbar-left">
                    <ul class="navbar-nav">
                      <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
                      <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">About Us</a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="about-us.html"><i class="fas fa-heart"></i> About Us</a>
                          <a class="dropdown-item" href="#"><i class="fas fa-heart"></i> mission and vission</a>
                          <a class="dropdown-item" href="#"><i class="fas fa-heart"></i> our team</a>
                        </div>
                      </li>
                      <li class="nav-item"><a href="our-services.html" class="nav-link">Services</a></li>
                      <li class="nav-item"><a href="portfolio-outer.html" class="nav-link">Portfolio</a></li>
                    </ul>
                  </div> -->
                  <?php 
                    wp_nav_menu( array(
                        'theme_location'    => 'menu-1',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse navbars',
                        'container_id'      => 'collapsibleNavbar1',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker(),
                    ) );
                  ?>

                  <a class="navbar-brand mx-auto" href="<?php echo home_url('/'); ?>">
                    <div id="logo">
                      <?php 
                      $brand_logo_id = get_theme_mod('custom_logo');
                      $brand_logo_src = wp_get_attachment_image_src($brand_logo_id,'full');
                      if(has_custom_logo()){
                        echo '<img src="'. $brand_logo_src[0] .'" alt="'. get_bloginfo('name') .'" class="site-logo img-fluid">';
                      }else{
                        echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
                      }
                      ?>
                    </div>
                  </a>

                  <?php 
                    wp_nav_menu( array(
                        'theme_location'    => 'menu-2',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse navbars',
                        'container_id'      => 'collapsibleNavbar2',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker(),
                    ) );
                  ?>
<!--                   <div class="collapse navbar-collapse" id="navbar-right">
                    <ul class="navbar-nav">
                      <li class="nav-item"><a href="#" class="nav-link">Partner with Us</a></li>
                      <li class="nav-item"><a href="contact-us.html" class="nav-link">Contacts</a></li>
                      <li class="nav-item"><a href="#" class="nav-link">Request Quote</a></li>
                    </ul>
                  </div> -->
                </nav>
<!--                 <div class="header-curve">
                  <svg id="header-curve-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 88.67" width="100%" height="120" preserveAspectRatio="none">
                    <path d="M725 88.67c90 0 226.91-36 720-36V0H0v52.67c430 0 630 36 720 36z" class="svg-menu-path" fill="rgba(0,0,0,0.4)"></path>
                  </svg>
                </div> -->
              </div>
            </div>
          </div>