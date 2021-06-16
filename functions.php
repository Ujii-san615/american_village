<?php
    //テーマサポート
    register_nav_menus();
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' ); 
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'custom-header' );
    add_theme_support( "custom-background");

    //タイトル出力
    function wpbeg_title( $title ) {
        if ( is_front_page() && is_home() ) { //トップページなら
            $title = get_bloginfo( 'name', 'display' );
        } elseif ( is_singular() ) { //シングルページなら
            $title = single_post_title( '', false );
        }
        return $title;
    }
    add_filter( 'pre_get_document_title', 'wpbeg_title' );

    function wpbeg_theme_add_editor_styles() {
        add_editor_style( get_template_directory_uri() . "/assets/css/editor-style.css" );
    }
    add_action( 'admin_init', 'wpbeg_theme_add_editor_styles' );

    function wpbeg_script() {
        wp_enqueue_style( 'reset', get_template_directory_uri() . '/assets/css/reset.css', array(), '1.0.0' );
        wp_enqueue_style( 'mplus1p', '//fonts.googleapis.com/earlyaccess/mplus1p.css', array() );
        wp_enqueue_style( 'Sacramento', '//fonts.googleapis.com/css?family=Sacramento&amp;amp;subset=latin-ext', array() );
        wp_enqueue_style( 'font-awesome', '/assets/css/fontawsome.css', array(), '4.7.0' );
        // wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', array(), '4.5.0' );
        wp_enqueue_style( 'wpbeg', get_template_directory_uri() . '/assets/css/wpbeg.css', array(), '1.0.0' );
        wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0' );
        wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
    }
    add_action( 'wp_enqueue_scripts', 'wpbeg_script' );

    function wpbeg_widgets_init() {
        register_sidebar (
            array(
                'name'          => 'カテゴリーウィジェット',
                'id'            => 'category_widget',
                'description'   => 'カテゴリー用ウィジェットです',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2><i class="fa fa-folder-open" aria-hidden="true"></i>',
                'after_title'   => "</h2>\n",
            )
        );
    }
    add_action( 'widgets_init', 'wpbeg_widgets_init' );

    register_sidebar(
        array(
            'name'          => 'タグウィジェット',
            'id'            => 'tag_widget',
            'description'   => 'タグ用ウィジェットです',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2><i class="fa fa-tags" aria-hidden="true"></i>',
            'after_title'   => "</h2>\n",
        )
    );
    register_sidebar(
        array(
            'name'          => 'アーカイブウィジェット',
            'id'            => 'archive_widget',
            'description'   => 'アーカイブ用ウィジェットです',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2><i class="fa fa-archive" aria-hidden="true"></i>',
            'after_title'   => "</h2>\n",
            )
    );

    if ( ! isset( $content_width ) ) {
        $content_width = 960;
    }

    function wpbeg_theme_setup(){
        load_theme_textdomain( 'wpbeg', get_template_directory() . '/languages' );
        }
    add_action( 'after_setup_theme', 'wpbeg_theme_setup' );

    register_nav_menus( array(
        'header-menu' => 'HeaderMenu',
        'footer-menu' => 'FooterMenu'
    ));