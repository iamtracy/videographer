<?php

remove_filter('the_content', 'wpautop');
    echo '<div class="small-12 banner" id="about">';
        echo '<div class="hero-section overlay-img" style="background-image: url(' . get_the_post_thumbnail_url() . ');">';
            echo '<div class="hero-section-text">';
                echo '<h1 class="title">' . get_the_title() . '</h1>';
                echo '<p class="separator"></p>';
            echo '</div>';
        echo '</div>';
    echo '</div>';
add_filter('the_content', 'wpautop');

the_content();

?>