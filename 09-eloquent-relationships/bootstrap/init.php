<?php
/**
 * Initialize app
 */

// declare root path
define('ROOT_PATH', realpath(dirname(__FILE__) . '/../'));

// autoload all the things
require(ROOT_PATH . '/vendor/autoload.php');

require(ROOT_PATH . '/includes/helpers.php');

// config
require(ROOT_PATH . '/config/app.php');

// db
require(ROOT_PATH . '/bootstrap/db.php');
