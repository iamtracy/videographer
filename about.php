<?php 
	/* Template Name: about */ 
	get_header();
?>

<div class="content">
<?php
    while ( have_posts() ) : the_post();
    	get_template_part( 'template-parts/page/content', 'about' );
	endwhile;
?>
</div>

<?php get_footer(); ?>