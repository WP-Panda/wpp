<?php
/**
 * Описание файлв
 *
 * @package wp-content
 * @version 1.0.0
 * @author WP_Panda
 */

defined( 'ABSPATH' ) || exit;
?>

<div class="wpp-row wpp-head-main-panel">
    <div class="wpp-col wpp-1_4">
        <div class="logo">WPP</div>
    </div>
    <div class="wpp-col wpp-3_4">
        <nav class="wpp-main-nav">
            <ul class="wpp-main-nav-list">
                <li><a href="<?php echo home_url(); ?>" title="xx">Видео уроки</a></li>
                <li><a href="<?php echo home_url(); ?>" title="xx">Статьи</a></li>
                <li><a href="<?php echo home_url(); ?>" title="xx">Снипеты</a></li>
                <li><a href="<?php echo home_url(); ?>" title="xx">Вопрос ответ</a></li>
                <li><a href="<?php echo home_url(); ?>" title="xx">Контакты</a></li>
                <li><a href="<?php echo home_url(); ?>" title="xx">Авторизация</a></li>
            </ul>
        </nav>
        <div class="nav-get" role="button" aria-label="<?php _e( 'Меню', 'wpp' ) ?>">
            <i class="wpp-i-burger"></i>
        </div>
    </div>
</div>
