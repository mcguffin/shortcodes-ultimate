<?php

/**
 * Filters.
 *
 * @since        5.0.4
 * @package      Shortcodes_Ultimate
 * @subpackage   Shortcodes_Ultimate/filters
 */

/**
 * Disable wptexturize filter for nestable shortcodes.
 *
 * @since  5.0.4
 * @param array   $shortcodes Shortcodes to not texturize.
 * @return array              Shortcodes to not texturize.
 */
function su_filter_disable_wptexturize( $shortcodes ) {

	$exclude = array( 'spoiler', 'row', 'column', 'list', 'note', 'box', );

	return array_merge( $shortcodes, $exclude );

}

/**
 * Custom formatting filter.
 *
 * @since  5.0.4
 * @param string  $content
 * @return string Formatted content with clean shortcodes content.
 */
function su_filter_custom_formatting( $content ) {

	$replacements = array (
		'<p>['    => '[',
		']</p>'   => ']',
		']<br />' => ']',
	);

	return strtr( $content, $replacements );

}
