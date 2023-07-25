<?php

//get the Header

get_header();
?>

<div class="page-content">
    <div class="container">


        <?php
        while( have_posts() ): the_post();?>
            <?php the_post_thumbnail( 'medium' ); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


            <h1><?php the_title(); ?></h1>
             <p><?php the_content(); ?></p>
             <?php wp_link_pages(); ?>


            <div class="ziaEdu-pagination">
                <div class="pages next">
                    <?php next_post_link( "&laquo; %link " );?>
                </div>
                <div class="pages previous">
                    <?php previous_post_link( "%link &raquo " ); ?>
                </div>
            </div>
        </article>
        <?php
        endwhile;
            ?>
        <?php
            if( comments_open() || get_comments_number() ){
                comments_template();
            }
        ?>
    </div>

</div>

<?php get_footer(); ?>