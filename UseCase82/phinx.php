<?php

/**
 * Configure PHP
 */
ini_set("display_errors", 0);
ini_set("display_startup_errors", 0);
error_reporting(E_ALL);

/**
 * Set the application default timezone
 */
date_default_timezone_set("Etc/UTC");

/**
 * Include the Composer Auto-loader.
 * Do this first in case other auto-loaders have a dependency
 *
 */
define("APP_ROOT", __DIR__ . "/");
require_once APP_ROOT . "vendor/autoload.php";

/**
 * Define Phinx Environment variables
 */
$_SERVER['PHINX_DBHOST'] = getenv('DATABASE_HOST');
$_SERVER['PHINX_DBNAME'] = getenv('DATABASE_NAME');
$_SERVER['PHINX_DBUSER'] = getenv('DATABASE_USERNAME');
$_SERVER['PHINX_DBPASS'] = getenv('DATABASE_PASSWORD');
$_SERVER['PHINX_DEFAULT_ENVIRONMENT'] = strtolower(getenv('SITE_ENVIRONMENT'));

/**
 * Get configuration from JSON file
 */
$contents = json_decode(file_get_contents(APP_ROOT . "phinx-config.json"), true);

/**
 * Return the Phinx configuration
 */
return $contents;
