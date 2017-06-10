<?php 
	/* Template Name: reel */ 
	get_header();
?>

<?php
    while ( have_posts() ) : the_post();
        get_template_part( 'template-parts/page/content', 'reel' );
    endwhile;
?>

<?php get_footer(); ?>