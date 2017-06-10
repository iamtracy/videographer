    
    <?php
        echo '<p class="tagline text-center city">' .  get_bloginfo( 'description' ) . '</p>';
        echo '<p class="text-center email"><a href="mailto:' . get_option('admin_email' ) . '">' . get_option('admin_email' ) . '</a></p>';
    ?>
    <footer>
    <div class="row text-center align-center">
    <?php
    $args = array( 'post_type' => 'social_media_icons', 'posts_per_page' => 6 );
    $loop = new WP_Query( $args );
    add_filter ('the_content','wpautop');
    while ( $loop->have_posts() ) : $loop->the_post();
            echo '<div class="small-1 social-icon">';  
                the_content();
            echo '</div>';
    endwhile;
    remove_filter('the_content', 'wpautop');
    ?>
	</div>
    </footer>
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>