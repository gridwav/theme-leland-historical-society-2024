	<!DOCTYPE html>
	<html>
	<head>

		<?php wp_head() ?>

        <title><?php echo wp_title(); ?></title>
	    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- Favicon for old browsers -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon/16.ico"/>

        <!-- Favicons for browser with out support .ico file -->
        <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicon/16x16.png" sizes="16x16">
        <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicon/32x32.png" sizes="32x32">

        <!-- For Google TV -->
        <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicon/96x96.png" sizes="96x96">

        <!-- For Android Chrome -->
        <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicon/196x196.png" sizes="196x196">

        <!-- For Coast by Opera (iPhone y iPad) -->
        <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicon/228x228.png" sizes="228x228">

        <!-- Favicons for apple devices iPhone, iPad -->
        <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_url'); ?>/img/favicon/57x57.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url'); ?>/img/favicon/114x114.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url'); ?>/img/favicon/72x72.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_url'); ?>/img/favicon/144x144.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_url'); ?>/img/favicon/60x60.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_url'); ?>/img/favicon/120x120.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_url'); ?>/img/favicon/76x76.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_url'); ?>/img/favicon/152x152.png">

        <!-- Favicons for Windows 8.0 and IE 10 -->
        <meta name="msapplication-TileColor" content="#2b5797">
        <meta name="msapplication-TileImage" content="<?php bloginfo('template_url'); ?>/img/favicon/mstile-144x144.png">

        <!-- Favicons for Windows 8.1 and IE 11-->
        <meta name="msapplication-config" content="/browserconfig.xml" />


	    <!-- CSS -->
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
			<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

	    <!-- Scripts -->
      <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>


			<!-- Global site tag (gtag.js) - Google Analytics -->
			<script async src="https://www.googletagmanager.com/gtag/js?id=UA-172141682-1"></script>
			<script>
			  window.dataLayer = window.dataLayer || [];
			  function gtag(){dataLayer.push(arguments);}
			  gtag('js', new Date());

			  gtag('config', 'UA-172141682-1');
			</script>

	</head>

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
	          <div class="col-md-9 d-xs-none d-sm-none d-md-none d-lg-block d-xl-block">
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
	              <!-- <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#touchNav"
	                aria-controls="touchNav" aria-expanded="false" aria-label="Toggle navigation">
	                  <img src="<?php bloginfo('template_url'); ?>/img/mobile/menu-icon.png">
	              </button> -->

	              <!-- Collapsible content -->
	              <!-- <div class="collapse navbar-collapse" id="touchNav"> -->

	                <!-- Links -->
                  <!--  <div class="header__mobile">
                        <?php

                            // $defaults = array(
                            //     'theme_location'  => '',
                            //     'menu'            => 'mobile',
                            //     'container'       => 'div',
                            //     'container_class' => '',
                            //     'container_id'    => '',
                            //     'menu_class'      => 'main-navigation',
                            //     'menu_id'         => '',
                            //     'echo'            => true,
                            //     'fallback_cb'     => 'wp_page_menu',
                            //     'before'          => '',
                            //     'after'           => '',
                            //     'link_before'     => '',
                            //     'link_after'      => '',
                            //     'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            //     'depth'           => 0,
                            //     'walker'          => ''
                            // );
														//
                            // wp_nav_menu( $defaults );

                        ?>

                    </div> -->
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
