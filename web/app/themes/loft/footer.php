<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package turistick
 */

?>
<footer class="main-footer">
    <div class="content-footer">
        <div class="bottom-menu">
            <ul class="b-menu__list">
                <li class="b-menu__list__item"><a href="#" class="b-menu__list__item__link">Главная</a></li>
                <li class="b-menu__list__item"><a href="#" class="b-menu__list__item__link">Полезная информация</a></li>
                <li class="b-menu__list__item"><a href="#" class="b-menu__list__item__link">Последние акции</a></li>
                <li class="b-menu__list__item"><a href="#" class="b-menu__list__item__link">О сервисе</a></li>
            </ul>
        </div>
        <div class="copyright-wrap">
            <div class="copyright-text">Туристик<a href="#" class="copyright-text__link"> loftschool 2016</a></div>
        </div>
    </div>
</footer>
</div>
<!-- wrapper_end-->
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="<?php bloginfo("template_directory"); ?>/js/main.js"></script>


<?php wp_footer(); ?>

</body>
</html>