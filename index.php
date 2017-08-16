<?php

echo $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
echo "<br/><hr/>";
echo $server = $url["host"];
echo "<br/>";
echo $username = $url["user"];
echo "<br/>";
echo $password = $url["pass"];
echo "<br/>";
echo $db = substr($url["path"], 1);
echo "<br/>";

die("shreyas");
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' );
