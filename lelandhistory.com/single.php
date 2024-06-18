<?php get_header(); ?>
<div class="page-wrapper">
	<div class="container">
		<div class="row">
				<?php if ( have_posts() ) : ?>
							<?php while ( have_posts() ) : the_post();  ?>
			<div class="col-md-12">
				<!-- Add the pagination functions here. -->
				<nav class="lhs-pagination-wrapper">
					<div class="lhs-pagination-next"><?php next_post_link( '%link', '<span class="lhs-pagination-arrow"> << </span> NEXT ARTICLE', TRUE ); ?></div>
					<div class="lhs-pagination-prev"><?php previous_post_link( '%link', 'PREVIOUS ARTICLE <span class="lhs-pagination-arrow"> >> </span>', TRUE ); ?></div>
				</nav>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<!-- Start of the main loop. -->
				<div class="blog-content">
						<?php if( is_single() ) : ?>
							<?php the_content() ?>
						<?php else : ?>
							<?php the_excerpt() ?>
						<?php endif ?>
				 </div>
			</div><!-- .site-main -->

			<div class="col-md-4">
				<span class="featured-image">
				<?php $feat_img = get_img_alt();  ?>
				<img src="<?php echo $feat_img->url; ?>" alt="<?php echo $feat_img->alt; ?>">
				</span>
			</div><!-- .site-main -->
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="lhs-discuss">
					<?php comments_template(true); ?>
				</div>
			</div>
		</div>

			<div class="row">
				<div class="col-md-12">
							<nav class="lhs-pagination-wrapper">
								<div class="lhs-pagination-next"><?php next_post_link( '%link', '<span class="lhs-pagination-arrow"> << </span> NEXT ARTICLE', TRUE ); ?></div>
							  <div class="lhs-pagination-prev"><?php previous_post_link( '%link', 'PREVIOUS ARTICLE <span class="lhs-pagination-arrow"> >> </span>', TRUE ); ?></div>
							</nav>
				</div>
			</div>


				<?php endwhile; ?>
				<!-- End of the main loop -->



				<?php else : ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				<?php endif; ?>


				</div><!-- #content -->

		</div>
	</div>

<?php get_footer(); ?>
