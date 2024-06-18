<?php
/*
Template Name: Front Page
*/
?>

<?php get_header(); ?>
<div class="home-top">

		<div class="home-top__content">
			<div class="row">
				<div class="col-md-12">
					<div class="home-top__content__message">
						<h1>Preserving our footprints for generations to come</h1>

						<p>
						The mission of the Leland Historical Society is to collect, preserve, and provide a repository of artifacts and historical records relating to the Leland area as a legacy for future generations.
						</p>

						<a class="button" href="/join-support/">Join</a>

					</div>
				</div>
			</div>
		</div>

</div>
<div class="home__content__wrapper">

	<div class="home_hours" style="background: #333; text-align: center; font-size: 20px; font-weight: 600; padding: 26px 20px 20px 20px; color: #FFFFFF;">
		<div class="row align-center">
			<div class="col-lg-12" style="">
				<!-- <span><p>Most Fridays, 10 a.m. to noon; Sunday, 1:00-3:00 p.m. Also by appointment. Closed on holidays.</p></span> -->
				<!-- <span><p>Fridays: 10 a.m. to noon; Sunday: 1:00-3:00 p.m by appointment only. Closed on holidays. <br> <span style="font-size: 16px;">Call (815) 495-5547 to schedule an appointment.<span></p></span> -->
				<!-- <span><p>Winter Hours until March 1: Sundays 1-3 p.m. by appointment.<br> Alternate days can also be scheduled by appointment. Call 815-495-5547<span></p></span> -->

				<!-- <span>Winter Hours through February by appointment only; Regular Hours beginning March 2, 2024 are Saturdays 11 a.m.-1 p.m. or by appointment</span> -->

				<span>Hours beginning March 2, 2024 are Saturdays 11 a.m.-1 p.m. or by appointment</span>

			</div>
		</div>
	</div>

	<div class="container">
		<div class="home__blog">
			<div class="row">
				<?php
				$recent_posts = wp_get_recent_posts(array(
					'numberposts' => 1, // Number of recent posts thumbnails to display
					'post_status' => 'publish', // Show only the published posts
					'category_name' => 'news-letter'
				));

				foreach($recent_posts as $post) {
					$content = substr($post['post_content'],0,350);
				?>

					<div class="col-lg-4">
						<a href="<?php echo get_permalink($post['ID']) ?>">
							<div class="home__blog__image">
								<?php echo get_the_post_thumbnail($post['ID'], 'full'); ?>
							</div>
						</a>
					</div>

					<div class="col-lg-8">
						<h2><?php  echo $post['post_title'] ?></h2>
						<p>

							<p><?php echo $content."...";  ?> <a href="<? echo get_permalink($post['ID']); ?>"> Read More</a></p>


					    </p>
					</div>
					<?php
						} //endforeach
						wp_reset_query();
					?>
				</div>
		</div>
	</div>

	<div class="home__promo">
		<div class="container">
			<div id="home__promo" class="">
				<div class="row">
					<div class="col-md-5">
					</div>
					<div id="purposal" class="home__promo__content col-md-7">
						<h2><span class="red">Event</span> Calendar</h2>
						<?php echo do_shortcode('[add_eventon_list number_of_months="4" hide_empty_months="yes" ]'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
