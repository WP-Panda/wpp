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
<div class="wpp-row wpp-head-bottom-panel wpp-show-hide-block">
    <div class="wpp-col wpp-1">
        <form class="wpp-main-search" property="potentialAction" typeof="https://schema.org/SearchAction">
            <meta property="target" content="<?php echo home_url('/?s={s}'); ?>>"/>
            <input  property="query" type="text" name="s" class="wpp-input wpp-search-input" aria-label="Введите поисковый запрос" placeholder="">
            <button type="submit" class="wpp-btn wpp-btn-medium wpp-search-btn" aria-label="Искать">
                <i class="wpp-i-glass"></i>
            </button>
        </form>
        <div class="wpp-show-hide-trigger wpp-search-trigger" role="button" aria-label="Открыть Форму Поиска">
            <i class="wpp-i-glass"></i>
        </div>
    </div>
</div>
