<?php get_header(); ?>

<div class="page-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-md-8">


				<?php
				$args = array(
				'post_type'=> 'post',
				'orderby'    => 'ID',
				'post_status' => 'publish',
				'order'    => 'DESC',
				'posts_per_page' => 0 // this will retrive all the post that is published
				);

				$result = new WP_Query( $args );

				$next_posts = get_next_posts_link();
				$prev_posts = get_previous_posts_link();

				if ( $result-> have_posts() ) : ?>

				<?php while ( $result->have_posts() ) : $result->the_post(); ?>

				<h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<span class="post-date">Published - <?php the_date(); ?></span>
				<span class="post-excerpt"><?php the_excerpt(); ?></span>
				<span class="post-read-more"><a href="<?php the_permalink(); ?>">Read More >></a></span>
				<p><?php the_tags(); ?></p>

				<?php endwhile;?>

				<?php else : ?>

					<h1>Not Found</h1>
					<p>No posts are available.</p>

				<?php endif; ?>

				</div><!-- .site-main -->
			</div>
		</div>
	</div>

<?php get_footer(); ?>
