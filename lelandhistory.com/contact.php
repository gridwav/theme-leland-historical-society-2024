<?php
/*
Template Name: Contact
*/
?>

<?php
get_header(); ?>

	<div class="page-wrapper">
		<div class="container">
			<div class="row">

					<?php
					// Start the loop.
					while ( have_posts() ) : the_post(); ?>
            <div class="col-md-12">
              <h1><?php the_title(); ?></h1>
            </div>
            <div class="col-md-6">
  						<div class="post">
  							<div class="entry">
  								<?php the_content(); ?>
  							</div>
  						</div>
            </div>
					<?php  // End the loop.
					endwhile;
					?>
      <div class="col-md-6">
        <?php echo do_shortcode( '[wpforms id="6" title="false" description="false"]' ); ?>
      </div>
		</div>
	</div>

<?php
get_footer(); ?>
