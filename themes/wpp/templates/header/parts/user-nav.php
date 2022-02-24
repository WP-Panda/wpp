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
<div class="user-account-nav">
	<?php

	if ( is_user_logged_in() ) {
	} else {
		printf( '<a href="%1$s" title="%2$s" class="wpp-color-error wpp-login-url" aria-label="%2$s"><i class="wpp-i-user"></i>%2$s</a>',wp_login_url(),__('Войти','wpp') );
	} ?>
</div>