<?php
/*
 * Plugin Name: loading-lazy
 * Plugin URI:
 * Description: When adding media on the post screen, automatically add loading = "lazy" to the img tag
 * Version:     1.0.0
 * Author:      dabohaze
 * Author URI:  https://dabohaze.site/
 * License:     GPLv2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */
add_filter('image_send_to_editor', 'addLoadingLazy');
function addLoadingLazy($html) {
  return str_replace('<img', '<img loading="lazy" ', $html);
}

?>
