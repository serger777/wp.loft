<div class="sidebar">
    <div class="sidebar__sidebar-item">
        <div class="sidebar-item__title">Теги</div>

        <div class="sidebar-item__content">
            <?
            $tags = get_tags();

                echo '<ul class="tags-list">';
            foreach ($tags as $tag) {
                echo '<li class="tags-list__item">
                    <a class="tags-list__item__link" href="' . get_tag_link($tag->term_id) . '">' . $tag->name . ' </a>
                    </li>';
            }
                echo '</ul>';

            ?>
        </div>

    </div>
    <div class="sidebar__sidebar-item">
        <div class="sidebar-item__title">Категории</div>
        <div class="sidebar-item__content">
            <ul class="category-list">
                <?php
                $categories = get_categories(array(
                    'orderby' => 'name',
                    'order' => 'ASC'
                ));

                foreach ($categories as $category) {
                    echo '<li class="category-list__item"> <a class="category-list__item__link" href="' . get_category_link($category->term_id) . '" title="' . sprintf(__("View all posts in %s"),
                            $category->name) . '" ' . '>' . $category->name . '</a>  ';
                    echo '<ul class="category-list__inner">';
                    # получаем дочерние рубрики
                    $parent_id = $category->term_id;
                    $sub_cats = get_categories(array(
                        'child_of' => $parent_id,
                        'hide_empty' => 0
                    ));
                    if ($sub_cats) {
                        foreach ($sub_cats as $cat) {
                            echo '<li class="category-list__item"> <a class="category-list__item__link" href="' . get_category_link($cat->term_id) . '" title="' . sprintf(__("View all posts in %s"),
                                    $cat->name) . '" ' . '>' . $cat->name . '</a> </li> ';
                        }
                    }
                    echo '</li></ul>';
                }
                ?>
        </div>
    </div>
    <div class="field">
        <? the_field('описание');?>
    </div>
</div>