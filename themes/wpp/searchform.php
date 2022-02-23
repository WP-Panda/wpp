<?php
/**
 * Форма поиска
 *
 * @package wp-content
 * @version 1.0.0
 * @author WP_Panda
 */

defined( 'ABSPATH' ) || exit; ?>

<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" class="wpp-main-search"
      itemprop="potentialAction" itemscope itemtype="https://schema.org/SearchAction">
    <meta itemprop="target" content="<?php echo home_url( '/?s={s}' ); ?>"/>
    <input itemprop="query-input" type="text" name="s" class="wpp-input wpp-search-input"
           aria-label="Введите поисковый запрос" value="<?php echo get_search_query() ?>" placeholder>
    <button type="submit" class="wpp-btn wpp-btn-medium wpp-search-btn" aria-label="Искать">
        <i class="wpp-i-glass"></i>
    </button>
</form>