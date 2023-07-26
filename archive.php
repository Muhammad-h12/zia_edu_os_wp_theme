<?php

// Include Header file Here
get_header();
?>

<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
<!-- Index Page Dynamic Content Starts Here -->
<div id="content" class="site-content">
    <div class="container">
        <?php the_archive_title( '<h1 class="archive-title text-center">', '</h1>' )?>
        <?php the_archive_description( '<div class="archive-description">', '</div>' ); ?>
        <div id="blog-page">

            <div class="blog-posts my--2">
                <?php

                if( have_posts() ):
                while( have_posts() ): the_post();
                    get_template_part( 'template-parts/post-loop' );
//                    get_template_part( 'template-parts/post-loop', 'archive' ); // if we create a separate file for post-loop.archive
                endwhile; ?>

                    <div class="ziaEdu-pagination flex justify-between">
                        <div class="pages new">
                            <?php previous_posts_link( "<< Newer Posts" ); ?>
                        </div>
                        <div class="pages old">
                            <?php next_posts_link( "Older Posts >>" );?>
                        </div>
                    </div>
                <?php
                else:
                ?>
            </div>
            <h2> No posts Found. Please check back later </h2>

            <?php endif;
            ?>
        </div>
        <?php get_sidebar(); ?>
    </div>

</div>
<!-- Index Page content ends here    -->

<?php get_footer(); ?>
