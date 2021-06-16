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


    <div class="c-wrap">
        <div class="c-grid">
            <div class="p-contents">
                <?php
                    if( have_posts() ) :
                        while( have_posts() ) :
                            the_post();
                            ?>
                            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <h2 class="post__ttl"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <ul class="post__meta">
                                    <li class="post__meta__item">
                                        <date class="post__meta__date"><?php the_date(); ?></date>
                                    </li>
                                    <li class="post__meta__item"><i class="fa fa-folder" aria-hidden="true"><?php the_category( ', ' ); ?></i></li>
                                    <li class="post__meta__item"><i class="fa fa-tag" aria-hidden="true"><?php the_tags( '' ); ?></i></li>
                                </ul>
                                <?php the_post_thumbnail(); ?>
                                <?php the_content( '続きを読む' ); ?>
                            </div>
                        <?php endwhile;
                    else :
                        ?><p>表示する記事がありません</p><?php
                    endif;
                ?>
            </div>
            <?php if ( $wp_query -> max_num_pages > 1 ) : ?>
                <ul class="p-pagenation">
                    <li class="prevpostslink"><?php next_posts_link( 'Prev' ); ?></li>
                    <li class="prevpostslink"><?php previous_posts_link( 'Next' ); ?></li>
                </ul>
            <?php endif; ?>
            <?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer(); ?>