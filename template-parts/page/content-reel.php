<div class="content">
    <?php
    remove_filter('the_content', 'wpautop');
        echo '<div class="responsive-embed widescreen">';
            echo '<iframe src="' . get_the_content() . '" frameborder="0" allowFullScreen></iframe>';
        echo '</div>';
    add_filter('the_content', 'wpautop');
    ?>
</div>