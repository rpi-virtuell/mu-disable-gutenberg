<?php

/*
 * Plugin Name:       MU Disable Gutenberg
 * Plugin URI:        https://github.com/rpi-virtuell/mu-disable-gutenberg
 * Description:       This MU Plugin disable the Gutenberg Editor
 * Version:           0.0.1
 * Author:            Frank Neumann-Staude
 * Author URI:        https://staude.net
 * License:           GNU General Public License v2
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.html
 * GitHub Plugin URI: https://github.com/rpi-virtuell/mu-disable-gutenberg
 * GitHub Branch:     master
 * Requires WP:       4.0
 * Requires PHP:      5.3
 */


if (version_compare($GLOBALS['wp_version'], '5.0-beta', '>')) {
	// WP > 5 beta
	add_filter('use_block_editor_for_post_type', '__return_false', 100);
} else {
	// WP < 5 beta
	add_filter('gutenberg_can_edit_post_type', '__return_false');
}
