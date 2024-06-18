<?php
/**
 * The Sidebar containing the main widget area
 */
?>
<aside>
	<?php if ( is_active_sidebar( 'side_bar' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'side_bar' ); ?>
	</div><!-- #primary-sidebar -->
	<?php endif; ?>

</aside><!-- #secondary -->
