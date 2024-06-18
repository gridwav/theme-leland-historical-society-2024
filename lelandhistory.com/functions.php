<?php

/********** Custom Post Types **********/



// Add Featured Image Support for post types
// function wpcodex_add_excerpt_support_for_pages() {
// 	add_post_type_support( 'employees', 'thumbnail' );
// 	add_image_size( 'Employees', 1, 120, true);
// }
// add_action( 'init', 'wpcodex_add_excerpt_support_for_pages' );

// Add Featured Image Support for Theme
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails', array( 'employees','page','post','homepage' ) );
    set_post_thumbnail_size( 250, 200, true ); // default Post Thumbnail dimensions (cropped)

    // additional image sizes
    // delete the next line if you do not need additional image sizes
    add_image_size( 'category-thumb', 300, 9999 ); //300 pixels wide (and unlimited height)
}

// Function to get custom post type by slug
function get_post_id ( $slug, $post_type ) {
    $query = new WP_Query(
        array(
            'name' => $slug,
            'post_type' => $post_type
        )
    );

    $query->the_post();
    return get_the_ID();
}

// Add Menu Support to theme
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Main Menu' ),
      'extra-menu' => __( 'Sub Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Side Bar',
		'id'            => 'side_bar',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="side-bar">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );


/********** Excerpt **********/

function wpdocs_excerpt_more( $more ) {
    if ( ! is_single() ) {
        $more = sprintf( '<a class="read-more" href="%1$s">%2$s</a>',
            get_permalink( get_the_ID() ),
            __( 'Read More', 'textdomain' )
        );
    }

    return $more;
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

/********** Proper way to enqueue scripts and styles **********/

function wpdocs_theme_name_scripts() {
    wp_enqueue_style( 'style', get_template_directory_uri()  . '/style.css', __FILE__  );

    // wp_deregister_script('jquery');
    // wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-2.2.4.min.js', __FILE__  );
    // wp_enqueue_script( 'jqueryModal-js', get_template_directory_uri() . '/js/jquery.modal.min.js' );
    // wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js' );

}

add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

function pagination_nav() {
    global $wp_query;

    if ( $wp_query->max_num_pages > 1 ) { ?>
        <nav class="pagination" role="navigation">
            <div class="nav-previous"><?php next_posts_link( '&larr; Older posts' ); ?></div>
            <div class="nav-next"><?php previous_posts_link( 'Newer posts &rarr;' ); ?></div>
        </nav>
<?php }
}

function pagination_bar() {
    global $wp_query;

    $total_pages = $wp_query->max_num_pages;

    if ($total_pages > 1){
        $current_page = max(1, get_query_var('paged'));

        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => '/page/%#%',
            'current' => $current_page,
            'total' => $total_pages,
        ));
    }
}


function wpdocs_add_post_link( $html ){
    $html = str_replace( '<a ', '<a class="article-link" ', $html );
    return $html;
}
add_filter( 'next_post_link', 'wpdocs_add_post_link' );
add_filter( 'previous_post_link', 'wpdocs_add_post_link' );



function get_img_alt() {
    
    $image_id = get_post_thumbnail_id(get_the_ID());
    $featured = new stdClass();
    $featured->url = get_the_post_thumbnail_url();
    $featured->alt = get_post_meta( get_post_thumbnail_id($image_id), '_wp_attachment_image_alt', true );
    return $featured; 
}


?>
