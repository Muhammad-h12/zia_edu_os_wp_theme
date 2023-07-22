<?php

/*
 * Template Name: general-template
 * */

// Include Header file Here
get_header();

?>

<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
<!-- Index Page Dynamic Content Starts Here -->
<div id="content" class="site-content">
    <div class="container">
        <?php

            while( have_posts() ): the_post(); ?>
                <div id="generalPageHeader">

                    <h1><?php the_title(); ?></h1>
                </div>
                <div>
                    <p><?php the_content(); ?></p>
                </div>
            <?php
            endwhile;
        ?>
    </div>
</div>
<!-- Index Page content ends here    -->

<?php get_footer(); ?>
