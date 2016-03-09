<?php

$vendorPath = __DIR__ . '/../../../../vendor/mickaelmattsson/blade/';

if (!is_writable($vendorPath.'storage/views'))
{
	die("Blade error: the views path must be writable! Change permission for `/vendor/mickaelmattson/blade/storage/views`");
}

/**
 * Root
 */
define( 'WP_BLADE_ROOT', $vendorPath);
/**
 * Path for the application folder inside the theme
 */
define( 'WP_BLADE_APP_PATH', WP_BLADE_ROOT . '/application/' );
/**
 * Path of assets
 */
define( 'WP_BLADE_ASSETS_PATH', WP_BLADE_ROOT . 'assets/' );
/**
 * Path for the config folder
 */
define( 'WP_BLADE_CONFIG_PATH', WP_BLADE_APP_PATH . 'config/' );
/**
 * Path for libraries
 */
define( 'WP_BLADE_LIBRARIES_PATH', WP_BLADE_APP_PATH . 'lib/' );
require_once ( WP_BLADE_CONFIG_PATH . '/initialize.php' );
WP_Blade_Main_Controller::make();