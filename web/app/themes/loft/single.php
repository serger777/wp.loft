<?php get_header(); ?>


<div class="main-content">
    <div class="content-wrapper">
        <div class="content">
            <div class="article-title title-page">
                <?php if (have_posts()) : while (have_posts()) :
                the_post(); ?>
                <? the_title(); ?>
            </div>
            <div class="article-image"><img src="<?php the_post_thumbnail_url() ?>" alt="Image поста"></div>
            <div class="article-info">
                <div class="post-date"><? the_date(); ?></div>
            </div>
            <div class="article-text">
                <? the_content(false); ?>
            </div>
            <?php endwhile; else : ?>
                <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>


            <div class="article-pagination">
                <? $get_prew = get_adjacent_post();

                if ($get_prew) { ?>
                    <div class="article-pagination__block pagination-prev-left">
                        <a href="<?= get_permalink($get_prew->ID) ?>" class="article-pagination__link">
                            <i class="icon icon-angle-double-left"></i>Предыдущая статья</a>
                        <div class="wrap-pagination-preview pagination-prev-left">
                            <div class="preview-article__img"><img src="<?= the_post_thumbnail_url($get_prew->ID) ?>"
                                                                   class="preview-article__image"></div>
                            <div class="preview-article__content">
                                <div class="preview-article__info"><a href="#"
                                                                      class="post-date"><?= $get_prew->post_date ?></a>
                                </div>
                                <div class="preview-article__text"><?= $get_prew->post_title ?></div>
                            </div>
                        </div>
                    </div>
                <? } ?>
                <? $get_next = get_adjacent_post(0, '', 0); ?>
                <? if ($get_next) { ?>

                    <div class="article-pagination__block pagination-prev-right"><a
                                href="<?= get_permalink($get_next->ID) ?>" class="article-pagination__link">Сдедующая
                            статья<i class="icon icon-angle-double-right"></i></a>
                        <div class="wrap-pagination-preview pagination-prev-right">
                            <div class="preview-article__img"><img src="<?= the_post_thumbnail_url($get_next->ID) ?>"
                                                                   class="preview-article__image"></div>
                            <div class="preview-article__content">
                                <div class="preview-article__info"><a href="#"
                                                                      class="post-date"><?= $get_next->post_date ?></a>
                                </div>
                                <div class="preview-article__text"><?= $get_next->post_title ?></div>
                            </div>
                        </div>
                    </div>
                <? } ?>
            </div>
        </div>

        <!-- sidebar-->
        <!-- sidebar-->
        <?php get_sidebar(); ?>
    </div>


</div>
<?php get_footer(); ?>

