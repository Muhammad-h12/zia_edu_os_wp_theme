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
        <section class="top-bar">
            <div id="top-logo">Site Logo</div>
            <div id="top-search-box">Search Bar will go Here</div>
        </section>
        <section>
            <nav id="top-menu-bar">
                <ul>
                    <li>Temp Menu nav 1</li>
                    <li>Temp Menu nav 1</li>
                    <li>Temp Menu nav 1</li>
                </ul>
            </nav>
        </section>
    </header>