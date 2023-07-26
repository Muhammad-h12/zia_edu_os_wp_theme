<?php

// Include Header file Here
 get_header();
 ?>

<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
    <!-- Index Page Dynamic Content Starts Here -->
         <div id="content" class="site-content">
            <div class="container">
                <h1>BLogs</h1>
                 <div id="blog-page">

                     <div class="blog-posts my--2">
                         <?php

                            if( have_posts() ):
                             while( have_posts() ): the_post();
                                get_template_part( 'template-parts/post-loop' );

                            endwhile; ?>
                                <div class="ziaEdu-pagination">
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
