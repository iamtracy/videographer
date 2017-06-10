<div class="content">
<?php
    $post_idx = 0;
    $args = array( 'post_type' => 'videos', 'posts_per_page' => 24 );
    $loop = new WP_Query( $args );
    add_filter('the_content', 'wpautop');
    while ( $loop->have_posts() ) : $loop->the_post();
    if($post_idx == 0) {
        $url = get_the_content();
        if (strpos($url, 'youtube')) {
            $youtube = 'https://www.youtube.com/embed/';
            $youtubeId = explode('v=', $url);
            $url = $youtube . $youtubeId[1];
        } else {
            $vimeo = 'https://player.vimeo.com/video/';
            $vimeoId =  basename($url);
            $url = $vimeo . $vimeoId;
        }
    echo '<div class="responsive-embed widescreen">';
        echo '<iframe id="theater" src="' . $url . '" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
    echo '</div>';
    echo '<div class="row small-up-1 medium-up-2 large-up-3 text-center align-center card-section-container">';
    }
    echo '<div class="column">';
            echo '<div class="card image-hover-wrapper"  data-getframe="' . get_the_content() . '">';
                echo '<div class="card-section">';
                    echo '<div class="overlay"></div>';
                    echo '<img src="' . the_post_thumbnail() . '">';
                    echo '<span class="image-hover-wrapper-reveal">';
                        echo '<p>' . the_title() . '</p>';
                    echo '</span>';
                echo '</div>';
        echo '</div>';
    echo '</div>';
    $post_idx++;
    endwhile;
    echo '</div>';
    remove_filter( 'the_content', 'wpautop' );	
?>
</div>