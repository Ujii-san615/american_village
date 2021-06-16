<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="format-detection" content="telephone=no">
        <meta name="description" content="WordPress theme development static data for beginners">
        <meta name="keywords" content="WordPress, Theme, development">
        <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . './css/style.css'); ?>" type="text/css" />

    <?php wp_head(); ?>
    </head>
    
    <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="header">
    <div class="header_left">
    <img class="logo" src="<?php echo get_theme_file_uri('./assets/img/logo.png'); ?>" alt="logo">
    </div>
    <div class="header_right">

        <!-- ハンバーガーメニューの表示・非表示を切り替えるチェックボックス -->
    <input type="checkbox" name="navToggle" id="navToggle" class="navToggle">
    <!-- ハンバーガーメニューのアイコン -->
    <label for="navToggle" class="btn-burger">
        <span class="icon"></span>
    </label>
    <!--表示されるメニュー-->
    <ul class="nav menu">
        <li class="nav-li menu-item"><a href="">
        <?php 
        wp_nav_menu( array( 
            'theme_location' => 'header-menu',
            'container' => 'nav'
        ) ); 
    ?>
        </a></li>

    </ul>

    </div>



    

    </header>
