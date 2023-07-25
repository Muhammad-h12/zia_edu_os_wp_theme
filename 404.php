<?php

get_header();
?>

<div class="container">
<h2>404 - Page / Post Does not Exist</h2>
   <p>PLease Go back to HomePage or Search for posts </p>


<h3>Search For Posts <span><?php get_search_form(); ?></span></h3>

<h3>Latest Posts</h3>

<?php
    the_widget( 'WP_Widget_Recent_Posts',array(
        'title' => 'Latest Posts',
        'number' => 4
    ) );
?>

</div>


