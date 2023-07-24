<?php

//get the Header

get_header();
?>

    <div class="page-content">
        <div class="container">
        <h3>Search Results for : <?php echo get_search_query(); ?></h3>
        <p><?php get_search_form();?> </p>


            <?php
                while( have_posts() ): the_post();?>
                <?php the_post_thumbnail( 'medium' ); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>></article>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php if( 'post' == get_post_type() ):?>
                <h4>categories, tags, date will be displayed here, </h4>
                <?php endif; ?>
                <p><?php the_content(); ?></p>
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