<?php
/**
 * WP_Framework_Update Configs Config
 *
 * @version 0.0.2
 * @author technote-space
 * @copyright technote-space All Rights Reserved
 * @license http://www.opensource.org/licenses/gpl-2.0.php GNU General Public License, version 2
 * @link https://technote.space
 */

if ( ! defined( 'WP_CONTENT_FRAMEWORK' ) ) {
	exit;
}

return [

	// readme
	'readme_file_check_url'               => '',

	// upgrade notice cache duration
	'upgrade_notice_cache_duration'       => DAY_IN_SECONDS,

	// upgrade notice empty cache duration
	'upgrade_notice_empty_cache_duration' => 10 * MINUTE_IN_SECONDS,

];