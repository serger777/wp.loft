<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Главная страница</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/css/libs.min.css">
    <link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/css/main.css">
    <link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/css/media.css">
</head>
<body>
<div class="wrapper">
    <header class="main-header">
        <div class="top-header">
            <div class="top-header__wrap">
                <div class="logotype-block">
                    <div class="logo-wrap"><a href="/"><img src="<?php bloginfo("template_directory"); ?>/img/logo.svg"
                                                            alt="Логотип" class="logo-wrap__logo-img"></a></div>
                </div>
                <nav class="main-navigation">
                    <ul class="nav-list">
                        <?

                        wp_nav_menu(array(
                            'menu' => 'header_menu',
                            'menu_class' => 'menu1',
                            'items_wrap' => '<ul class="nav-list"><li  class="nav-list__nav-item">$s</li></ul>',
                        ));
                        ?>
                    </ul>

<!--                    <nav class="main-navigation">-->
<!--                        <ul class="nav-list">-->
<!--                            <li class="nav-list__nav-item"><a href="#" class="nav-list__nav-item__nav-link">Главная</a>-->
<!--                            </li>-->
<!--                            <li class="nav-list__nav-item"><a href="#" class="nav-list__nav-item__nav-link">Полезная-->
<!--                                    информация</a></li>-->
<!--                            <li class="nav-list__nav-item"><a href="#" class="nav-list__nav-item__nav-link">Последние-->
<!--                                    акции</a></li>-->
<!--                            <li class="nav-list__nav-item"><a href="#" class="nav-list__nav-item__nav-link">О-->
<!--                                    сервисе</a></li>-->
<!--                            <li class="nav-list__nav-item"><a href="#" class="nav-list__nav-item__nav-link">Новости</a>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </nav>-->
            </div>
        </div>
        <div class="bottom-header">
            <div class="search-form-wrap">
                <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <label>
                        <span class="screen-reader-text"><?php echo _x( '', 'label', 'loft' ); ?></span>
                        <input type="search" class="search-form__input" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'loft' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
                    </label>
                    <button type="submit" class="search-form__btn-search"><span class="screen-reader-text"><?php echo _x( '', 'submit button', 'loft' ); ?></span><i class="icon icon-search"></i></button>
                </form>

            </div>
        </div>
    </header>
    <!-- header_end-->