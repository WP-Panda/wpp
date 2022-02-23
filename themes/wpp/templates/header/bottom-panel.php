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
		<?php get_search_form(); ?>
        <div class="wpp-show-hide-trigger wpp-search-trigger" role="button" aria-label="<?php _e('Открыть Форму Поиска', 'wpp') ?>">
            <i class="wpp-i-glass"></i>
        </div>
    </div>
</div>
