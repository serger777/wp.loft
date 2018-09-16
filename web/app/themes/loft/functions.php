<?php
add_theme_support('menus');
add_filter('nav_menu_link_attributes', 'custom_nav_menu_link_attributes', 10, 4);

function custom_nav_menu_link_attributes($atts, $item, $args, $depth)
{
    if ($args->menu->slug == 'menus' && $item->ID == 1) {

        $class = "button";

        // Make sure not to overwrite any existing classes
        $atts['class'] = (!empty($atts['class'])) ? $atts['class'] . ' ' . $class : $class;
    }

    return $atts;
}

function wpbeginner_numeric_posts_nav()
{

    if (is_singular()) {
        return;
    }

    global $wp_query;

    /** Stop execution if there's only 1 page */
    if ($wp_query->max_num_pages <= 1) {
        return;
    }

    $paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
    $max = intval($wp_query->max_num_pages);

    /** Add current page to the array */
    if ($paged >= 1) {
        $links[] = $paged;
    }

    /** Add the pages around the current page to the array */
    if ($paged >= 3) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    if (($paged + 2) <= $max) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }

    echo '<div class="pagenavi-post-wrap"><ul>' . "\n";

    /** Previous Post Link */
    if (get_previous_posts_link()) {
        printf('%s' . "\n", get_previous_posts_link('<i class="icon icon-angle-double-left"></i>'));
    }

    /** Link to first page, plus ellipses if necessary */
    if (!in_array(1, $links)) {
        $class = 1 == $paged ? ' ' : '';

        printf('%s<a class="pagenavi-post__page" href="%s">%s</a>' . "\n", $class, esc_url(get_pagenum_link(1)), '1');

        if (!in_array(2, $links)) {
            echo '<li>…</li>';
        }
    }

    /** Link to current page, plus 2 pages in either direction if necessary */
    sort($links);
    foreach ((array)$links as $link) {
        $class = $paged == $link ? ' ' : '';
        printf('%s<a class="pagenavi-post__current" href="%s">%s</a>' . "\n", $class, esc_url(get_pagenum_link($link)),
            $link);
    }

    /** Link to last page, plus ellipses if necessary */
    if (!in_array($max, $links)) {
        if (!in_array($max - 1, $links)) {
            echo '<li>…</li>' . "\n";
        }

        $class = $paged == $max ? ' ' : '';
        printf('%s<a class="pagenavi-post__page" href="%s">%s</a>' . "\n", $class, esc_url(get_pagenum_link($max)),
            $max);
    }

    /** Next Post Link */
    if (get_next_posts_link()) {
        printf('%s' . "\n", get_next_posts_link('<i class="icon icon-angle-double-right"></i>'));
    }

    echo '</ul></div>' . "\n";

}