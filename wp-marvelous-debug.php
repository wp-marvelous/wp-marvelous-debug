<?php
/**
 * Plugin Name: WP Marvelous Debug
 * Description: Edit the debugging constants from wp-config, view the log file on the Dashboard and more debugging features
 * Version: 1.1.0
 * Author: Pablo Pacheco
 * Author URI: https://profiles.wordpress.org/karzin/
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain: wp-marvelous-debug
 * Domain Path: /src/languages
 */

require "vendor/autoload.php";

$core = new \ThanksToIT\WPMD\Core();
$core->setup( array(
	'filesystem_path' => __FILE__,
) );
$core->init();