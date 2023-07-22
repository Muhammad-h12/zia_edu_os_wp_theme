<?php

// Include Header file Here
get_header();

?>
<!-- Index Page Dynamic Content Starts Here -->
<div id="content" class="site-content">
    <div class="container">
        <div id="showcase">
            <?php


            while( have_posts() ): the_post(); ?>
                <div>
                    <h1><?php the_title(); ?></h1>
                </div>
            <?php
            endwhile;
            ?>
        </div>
        <div id="services">
            <h2>Services</h2>
            <div class="services-widget">
                <div class="services-item">
                    <?php if( is_active_sidebar( 'services-1' )){
                        dynamic_sidebar( 'services-1' );
                    } ; ?>
                </div>
                <div class="services-item">
                    <?php if( is_active_sidebar( 'services-2' )){
                        dynamic_sidebar( 'services-2' );
                    }  ?>
                </div>
                <div class="services-item">
                    <?php if( is_active_sidebar( 'services-3' )) {
                        dynamic_sidebar('services-3');
                    } ?>
                </div>
            </div>
        </div>
        <div id="home-blog">
            <h2>Blogs</h2>
            <div class="home-blog-posts">
                <?php
                    $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 3,
                            'category__not_in' => array( 1 )
                    );

                    $postList = new WP_Query( $args );

                    if( $postList->have_posts() ):
                        while( $postList->have_posts() ): $postList->the_post();
                    ?>
                    <div class="latest-news">
                        <div class="latest-post-img">
                         <?php the_post_thumbnail( 'medium' ); ?>
                        </div>
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_excerpt(); ?></p>
                    </div>
                    <?php endwhile;
                    endif;
                ?>
            </div>
        </div>
    </div>
</div>
<!-- Index Page content ends here    -->

<?php get_footer(); ?>
