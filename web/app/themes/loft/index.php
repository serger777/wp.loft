<?php get_header(); ?>


<div class="main-content">
    <div class="content-wrapper">
        <div class="content">
            <h1 class="title-page">Последние новости и акции из мира туризма</h1>
            <div class="posts-list">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <!-- post-mini-->
                    <div class="post-wrap">
                        <div class="post-thumbnail"><img src="<?php the_post_thumbnail_url() ?>" alt="Image поста"
                                                         class="post-thumbnail__image"></div>
                        <div class="post-content">
                            <div class="post-content__post-info">
                                <div class="post-date"><? the_date(); ?></div>
                            </div>
                            <div class="post-content__post-text">
                                <?
                                the_title(' <div class="post-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">',
                                    '</a></div>');
                                ?>

                                <p>
                                    <? the_content(false); ?>

                                </p>
                            </div>
                            <div class="post-content__post-control">
                                <a href="<?= esc_url(get_permalink()); ?>" class="btn-read-post"> Читать далее </a>
                            </div>
                        </div>
                    </div>
                    <!-- post-mini_end-->


                <?php endwhile; else : ?>
                    <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
                <?php endif; ?>
            </div>
            <?php echo wpbeginner_numeric_posts_nav();
            ?>


        </div>
        <!-- sidebar-->
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>

