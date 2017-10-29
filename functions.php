<?php
define('PUMA_VERSION','2.2.0');

/**
 * Theme setup additions.
 */

require get_template_directory() . '/inc/setup.php';

/**
 * Puma only works in WordPress 4.4 or later.
 */

if ( version_compare( $GLOBALS['wp_version'], '4.4-alpha', '<' ) ) {
    require get_template_directory() . '/inc/back-compat.php';
}

/**
 * AJAX callback additions.
 */

require get_template_directory() . '/inc/callback.php';

/**
 * Functional Package additions.
 */

require get_template_directory() . '/inc/pack.php';

/**
 * Functional customize additions.
 */

require get_template_directory() . '/inc/customize.php';

/**
 * Theme update additions.
 */

require get_template_directory() . '/inc/update.php';

/**
 * Theme required plugins
 */

require 'inc/tgm-plugin-activation/plugins.php';

function wp_owner_mark($author_link){
	$comment = get_comment($comment_id);
	echo $author_link;
	if(user_can($comment->user_id, 'administrator')){
		?> <a title="Author" class="admin-tag">admin</a><?php
	}
}
add_filter('get_comment_author_link', 'wp_owner_mark');