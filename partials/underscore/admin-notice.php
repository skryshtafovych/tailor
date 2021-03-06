<?php

/**
 * Underscore JS template for admin notices.
 *
 * @package Tailor
 * @subpackage Underscore Templates
 * @since 1.0.0
 */

defined( 'ABSPATH' ) or die(); ?>

<script id="tmpl-tailor-notice" type="text/html">
	<div class="error notice notice-error is-dismissible">
		<p><%= message %></p>
		<button type="button" class="notice-dismiss">
			<span class="screen-reader-text"><?php _e( 'Dismiss this notice.', 'tailor' ); ?></span>
		</button>
	</div>
</script>