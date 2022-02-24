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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width,initial-scale=1'/>
    <meta content='true' name='HandheldFriendly'/>
    <meta content='width' name='MobileOptimized'/>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> itemscope itemtype="https://schema.org/WebSite">
<meta itemprop="url" content="<?php echo home_url( '/' ); ?>"/>
<header class="wpp-container site-header">

	<?php
	/**
	 * @hooked wpp_header_top_panel - 10
	 * @hooked wpp_header_main_panel - 20
	 * @hooked wpp_header_bottom_panel - 30
	 */

	do_action( 'wpp_theme_header' )
	?>
</header>
<div class="wpp-container content">
    <div class="wpp-row">