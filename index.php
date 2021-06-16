<?php get_header(); ?>
<main class="main">
    <section class="section1">
        <div class="main_box">
        <div class="main_img_pc">
            <img class="pc_main" src="<?php echo get_theme_file_uri('./assets/img/visual_1_pc.png'); ?>" alt="メイン画像pc用">
            <img class="sp_main" src="<?php echo get_theme_file_uri('./assets/img/visual_1_sp.png'); ?>" alt="メイン画像sp用用">
        </div>
        <div class="main_text_pc">
            <img class="text_pc" src="<?php echo get_theme_file_uri('./assets/img/visual_text_pc.png'); ?>" alt="text_pc">
            <img class="text_sp" src="<?php echo get_theme_file_uri('./assets/img/visual_text_sp.png'); ?>" alt="text_sp">       
        </div>
        </div>
        <p class="main_word">進化し続ける「街」アメリカンビレッジマガジン</p>


    <div class="section2">
        <h1 class="section1-h1">
            latest articles
        </h1>

        <ul class="section2-ul">
        <?php
            if( have_posts() ) :
                while( have_posts() ) :
                    the_post();
        ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <a href="<?php the_permalink(); ?>">
                    <li class="section2-li" >
                        <p class="post__meta__item">
                            <div class="section2-img"><?php the_post_thumbnail(); ?></div>
                        </p>
                        <p class="post__meta__item">
                            <date class="post__meta__date"><?php the_date(); ?></date>
                        </p>
                        <h2 class="post__ttl section2-h2"><?php the_title(); ?></h2>

                        <p class="section2-p">
                            <a href="" class="section2-a">READ MORE</a>
                        </p>
                    </li>
                </a>
            </div>

        <?php endwhile;
            else :
        ?>
        </ul>
            <p>表示する記事がありません</p>
        <?php endif;?>

    </div>


            <?php if ( $wp_query -> max_num_pages > 1 ) : ?>
                <ul class="p-pagenation">
                    <li class="prevpostslink"><?php next_posts_link( 'Prev' ); ?></li>
                    <li class="prevpostslink"><?php previous_posts_link( 'Next' ); ?></li>
                </ul>
            <?php endif; ?>
    </div>
<?php get_footer(); ?>