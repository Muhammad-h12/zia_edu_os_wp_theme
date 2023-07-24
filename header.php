<?php
/*
Defualt theme Template - This file powers up all the Pages and Posts of the Wordpress, It acts as a fallback
*/

//echo "Zia Edu Theme";
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="site">
    <header>
        <section id="top-bar">
            <div id="top-logo">
                <?php
                  if( has_custom_logo() ){
                      the_custom_logo();
                  }else{
                      ?>
                      <a href="<?php echo home_url( '/' ) ?>"><?php bloginfo( 'name' )?></a>
                 <?php     
                  }

                ?>
            </div>
            <div id="top-search-box"><?php get_search_form(); ?></div>
        </section>
        <section class="my--">
            <nav id="top-menu-bar">
        <!-- Register Main Menu Here and check if is mobile view or desktop view and display menu accordingly  -->

                <div class="hamburger-menu">
                    <div class="hamburger-icon">Hamburger</div>
                </div>
                <div class="mobile-menu">
                    TEst
                </div>

                <?php wp_nav_menu(
                        array(
                                'theme_location' => 'zia_edu_main_menu',
                                'depth' => 0
                        )
                ); ?>
            </nav>
        </section>
    </header>