<?php
/**
 * Описание файлв
 *
 * @package wp-content
 * @version 1.0.0
 * @author WP_Panda
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>

    <body>
    <header class="site-header">
        <div class="wpp-container">
            <div class="wpp-row wpp-head-top-panel">
                <div class="wpp-col wpp-1_2">
                    <a href="mailto:yoowordpress@yandex.ru" class="wpp-top-link">yoowordpress@yandex.ru</a>
                </div>
                <div class="wpp-col wpp-1_2 wpp-text-right">
                    <nav class="wpp-top-user-nav">
                        <ul>
                            <li>
                                <a href="javascript:void(0);" title="">
                                    <img class="wpp-icon-small"
                                         src="//wpp.wpp/wp-content/themes/wpp/assets/img/icons/user.svg" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" title="">
                                    <img class="wpp-icon-small"
                                         src="//wpp.wpp/wp-content/themes/wpp/assets/img/icons/user.svg" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" title="">
                                    <img class="wpp-icon-small"
                                         src="//wpp.wpp/wp-content/themes/wpp/assets/img/icons/user.svg" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" title="">
                                    <img class="wpp-icon-small"
                                         src="//wpp.wpp/wp-content/themes/wpp/assets/img/icons/user.svg" alt="">
                                </a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
            <div class="wpp-row wpp-head-main-panel">
                <div class="wpp-col wpp-1_3">
                    <div class="logo">WPP</div>
                </div>
                <div class="wpp-col wpp-2_3">
                    <nav>
                        <ul class="wpp-main-nav">
                            <li><a href="">Тест ссылка</a></li>
                            <li><a href="">Тест ссылка</a></li>
                            <li><a href="">Тест ссылка</a></li>
                            <li><a href="">Тест ссылка</a></li>
                            <li><a href="">Тест ссылка</a></li>
                        </ul>
                        <div class="nav-get">
                            <img  class="wpp-icon-medium" src="//wpp.wpp/wp-content/themes/wpp/assets/img/icons/bars.svg"
                                  data-hide="//wpp.wpp/wp-content/themes/wpp/assets/img/icons/xmark.svg"
                                  data-show="//wpp.wpp/wp-content/themes/wpp/assets/img/icons/bars.svg">
                        </div>
                    </nav>
                </div>
            </div>
            <div class="wpp-row wpp-head-bottom-panel wpp-show-hide-block">
                <div class="wpp-col wpp-1">
                    <form class="wpp-main-search">
                        <input type="text" class="wpp-input wpp-search-input" placeholder="Введите поисковую фразу">
                        <button type="submit" class="wpp-btn wpp-btn-medium wpp-search-btn ">
                            <img class="wpp-icon-small"
                                 src="//wpp.wpp/wp-content/themes/wpp/assets/img/icons/magnifying-glass.svg" alt="">
                        </button>
                    </form>
                    <div class="wpp-show-hide-trigger wpp-search-trigger">
                        <img class="wpp-icon-small"
                             src="//wpp.wpp/wp-content/themes/wpp/assets/img/icons/magnifying-glass.svg"
                             data-hide="//wpp.wpp/wp-content/themes/wpp/assets/img/icons/angle-up.svg"
                             data-show="//wpp.wpp/wp-content/themes/wpp/assets/img/icons/magnifying-glass.svg"
                             alt="">
                    </div>
                </div>
            </div>
        </div>
    </header>
<?php get_footer();