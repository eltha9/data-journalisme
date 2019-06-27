<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?=get_template_directory_uri().'/assets/favicon/apple-touch-icon.png'?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=get_template_directory_uri().'/assets/favicon/favicon-32x32.png'?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=get_template_directory_uri().'/assets/favicon/favicon-16x16.png'?>">
    <link rel="manifest" href="<?=get_template_directory_uri().'/assets/favicon/site.webmanifest'?>">
    <link rel="mask-icon" href="<?=get_template_directory_uri().'/assets/favicon/safari-pinned-tab.svg'?>" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="theme-color" content="#ffffff">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,500&display=swap" rel="stylesheet">
    
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <title><?= wp_title();?></title>
</head>

<body <?php body_class(); ?>>
<header id="header">
    <div class="open-menu">
        <div class="inner">
            <ul>
                <li> <a href="<?= home_url()?>"">Home</a> </li>
                <li> <a href="">Saved</a> </li>
                <li> <a href="">About</a> </li>
                <!-- <li> <a href="">Profile</a> </li> -->
            </ul>
            <svg class="svg" viewBox="0 0 273 437" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M136.5 437C211.887 437 273 339.174 273 218.5C273 97.8258 211.887 0 136.5 0C61.1131 0 0 97.8258 0 218.5C0 339.174 61.1131 437 136.5 437Z" fill="#95D9C3"/>
            </svg>                    
        </div>
    </div>
    <div class="burger-menu">
        <span></span>
        <span></span>
        <span></span>
        <span></span>            
    </div>
    <div class="logo">
        <a href="<?= home_url()?>"><img src="<?=get_template_directory_uri().'/assets/images/logo.png' ?>" alt="datasanté logo"></a>
    </div>
    <div class="open-search">
        <div class="inner">
            <div class="wrap">
                <form action="<?= get_template_directory_uri().'/search.php'?>" method="get">
                    <input type="text" placeholder="Rechercher...">
                    <button type="submit">
                        <img src="http://localhost:8888/data_journalisme/wp-content/themes/customtheme/assets/images/Search.svg" alt="search-menu">
                    </button>
                </form>
            </div>
        </div>
    </div>
    <div class="search-menu">
        <img src="<?=get_template_directory_uri(). '/assets/images/Search.svg'?>" alt="search-menu">
    </div>

</header>
<div class="header-margin"></div>