
    <div class="post--single">

        <?php the_post_thumbnail( 'thumb' ); ?>
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <p>Posted in <span> <?php echo get_the_date(); ?> </span> by <span><?php the_author_posts_link(); ?></span> <span> <?php the_category( ' ' ); ?></span></p>
        <span> <?php the_tags( '', ',' ); ?></span>
        <p><?php the_excerpt(); ?></p>

    </div>
