<?php 
    /* Template Name: equipment */ 
	get_header();
?>

<div class="content">
<?php

    while ( have_posts() ) : the_post();
	    get_template_part( 'template-parts/page/content', 'equipment' );
	endwhile;


?>
</div>

<?php get_footer(); ?>