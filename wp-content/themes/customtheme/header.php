<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,500&display=swap" rel="stylesheet">
    
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>

<body <?php body_class(); ?>>
<header id="header">
    <div class="open-menu">
        <div class="inner">
            <ul>
                <li> <a href="">Home</a> </li>
                <li> <a href="">Saved</a> </li>
                <li> <a href="">About</a> </li>
                <li> <a href="">Profile</a> </li>
            </ul>
            <svg viewBox="0 0 273 437" fill="none" xmlns="http://www.w3.org/2000/svg">
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
    <a href="#" class="search-menu">
        <img src="<?=get_template_directory_uri().'/assets/images/Search.svg'?>" >
    </a>
</header>
<div class="header-margin"></div>