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
    <?php wp_head(); ?>
    </head>
    
    <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="header">
    <div class="header_left">
        <img class="logo" src="./assets/img/logo.png" alt="logo">
    </div>
    <div class="header_right">
        <ul class="nav">
        <li>Menu01</li>
        <li>Menu02</li>
        <li>Menu03</li>
        <li>Menu04</li>
        </ul>
    </div>
    </header>