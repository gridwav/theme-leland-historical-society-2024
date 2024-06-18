<?php
    /*
     Template Name: Google Converstion
     */
    ?>

<?php
    get_header(); ?>

<script fbq('track', 'Lead'); </script>
<div class="page-wrapper">
<div class="container">
<div class="row">
<div class="col-md-8">
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
<div class="col-md-4">
<?php get_sidebar(); ?>
</div>
</div>
</div>

<?php
    get_footer(); ?>

