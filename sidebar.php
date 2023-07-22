<!--// check whether the following widget of the widget area or the sidebar is active-->

<?php if( is_active_sidebar( 'sidebar-blog' ) ): ?>
    <aside class="sidebar">
        <!-- Display the content of the sidebar sidebar-blog using dynamic_sidebar function -->
        <?php dynamic_sidebar( 'sidebar-blog' ); ?>
    </aside>
<?php endif;

