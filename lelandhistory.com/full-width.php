<?php
/*
Template Name: Full Width
*/
?>

<?php
get_header(); ?>

	<div class="page-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php
					// Start the loop.
					while ( have_posts() ) : the_post(); ?>

						<div class="post">
							<h1><?php the_title(); ?></h1>
							<div class="entry">
								<?php the_content(); ?>
							</div>
						</div>
					<?php  // End the loop.
					endwhile;
					?>
			</div>
			<div class="col-md-12">
				<?
					if ( comments_open() || get_comments_number() ) :
						echo "<hr>";
						// comments_number( 'Be the first to leave a comment!', 'One comment has been made - what can you add?', '% people have commented - get in on the conversation!' );
						comments_template();
				  endif;

					?>

					<? echo "<hr>"?>



			</div>
		</div>
	</div>

<?php
get_footer(); ?>
