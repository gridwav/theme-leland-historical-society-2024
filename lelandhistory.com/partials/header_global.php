
	<div class="shell">
	  <div class="shell__header">
	    <div class="header">

	      <div class="container-fluid">
	        <div class="row">
	          <div class="col-md-3 d-none d-xs-none d-sm-none d-md-block d-lg-block d-xl-block">
	            <div class="header__logo">
	    			     <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo.png"></a>
	            </div>
	          </div>
	          <div class="col-md-9 d-xs-none d-sm-none d-md-block d-lg-block d-xl-block">
	            <div class="header__navigation">
                    <?php

                        $defaults = array(
                            'theme_location'  => '',
                            'menu'            => '',
                            'container'       => 'div',
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => 'main-navigation',
                            'menu_id'         => '',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'depth'           => 0,
                            'walker'          => ''
                        );

                        wp_nav_menu( $defaults );

                    ?>
	            </div>
	          </div>
	          <div class="col-md-12 d-xs-block d-sm-block d-md-none d-lg-none d-xl-none">

	            <!--Navbar-->
	            <nav class="navbar navbar-light light-blue lighten-4">

	              <!-- Navbar brand -->
	              <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('template_url'); ?>/img/mobile/logo-mobile.png"></a>

	              <!-- Collapse button -->
	              <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#touchNav"
	                aria-controls="touchNav" aria-expanded="false" aria-label="Toggle navigation">
	                  <img src="<?php bloginfo('template_url'); ?>/img/mobile/menu-icon.png">
	              </button>

	              <!-- Collapsible content -->
	              <div class="collapse navbar-collapse" id="touchNav">

	                <!-- Links -->
                    <div class="header__mobile">
                        <?php

                            $defaults = array(
                                'theme_location'  => '',
                                'menu'            => 'mobile-main-menu',
                                'container'       => 'div',
                                'container_class' => '',
                                'container_id'    => '',
                                'menu_class'      => 'main-navigation',
                                'menu_id'         => '',
                                'echo'            => true,
                                'fallback_cb'     => 'wp_page_menu',
                                'before'          => '',
                                'after'           => '',
                                'link_before'     => '',
                                'link_after'      => '',
                                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                'depth'           => 0,
                                'walker'          => ''
                            );

                            wp_nav_menu( $defaults );

                        ?>

                    </div>
	                <!-- Links -->

	              </div>
	              <!-- Collapsible content -->

	            </nav>
	            <!--/.Navbar-->
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
	  <div class="shell__body">
