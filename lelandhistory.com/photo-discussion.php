<?php
/*
Template Name: Photo Discussion
*/
?>

<?php
get_header(); ?>

	<div class="page-wrapper photo-discussion" style="margin-bottom: 100px;">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
           <div id="primary" class="content-area">
               <main id="main" class="site-main" role="main">

               <?php
               $paged = (get_query_var( 'paged' )) ? get_query_var( 'paged' ) : 1;
               $args = array(
                   'post_type' => 'post',
                   'post_status' => 'publish',
                   'category_name' => 'photo-discussion',
                   'posts_per_page' => 6,
                   'paged' => $paged,
               );
               $arr_posts = new WP_Query( $args );

               if ( $arr_posts->have_posts() ) :

                   while ( $arr_posts->have_posts() ) :
                       $arr_posts->the_post();
                       ?>
                       <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                           <?php
                           if ( has_post_thumbnail() ) :
                               the_post_thumbnail();
                           endif;
                           ?>
                           <header class="entry-header">
                               <h2 class="entry-title"><?php the_title(); ?></h2>
                           </header>
                           <div class="entry-content">
                               <?php the_excerpt(); ?>
                               <a href="<?php the_permalink(); ?>">Read More</a>
                           </div>
                       </article>
                       <?php
                   endwhile;
                   wp_pagenavi(
                       array(
                           'query' => $arr_posts,
                       )
                   );
               endif;
               ?>

				<?php
						// if (comments_open()){
						//	comments_template( '', true );
 						// }

						// function comments_template( $file = '/comments.php', $separate_comments = false ) {
						//     global $wp_query, $withcomments, $post, $wpdb, $id, $comment, $user_login, $user_identity, $overridden_cpage;
						//
						//     if ( ! ( is_single() || is_page() || $withcomments ) || empty( $post ) ) {
						//         return;
						//     }
						//
						//     if ( empty( $file ) ) {
						//         $file = '/comments.php';
						//     }


					?>





        </div>
      </div>
    </div>
  </div>
</div>

<?php
get_footer(); ?>
