<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">


    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header id="header">
        <div class="menu-bar">
            <img src="<?= get_template_directory_uri() ?>/assets/images/Menu.svg" alt="">
        </div>
        <a href="#" class="menu-search">
            <img src="<?= get_template_directory_uri() ?>/assets/images/Search.svg" alt="">
        </a>
    </header>
    <div class="header-margin"></div>
    