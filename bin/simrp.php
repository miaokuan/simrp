#!/usr/bin/env php
<?php
/**
 * @author miaokuan
 */

if (PHP_SAPI !== 'cli') {
    die("only run in cli mode.");
}

error_reporting(E_ALL & ~E_NOTICE);

define('HOME_DIR', __DIR__);
define('ROOT_DIR', dirname(__DIR__));
define('VAR_DIR', ROOT_DIR . '/var');

require __DIR__ . '/../vendor/autoload.php';

$config = array('exception' => true);
Wee\Common::init($config);

$namespace = 'SimrpBinController\\';
Wee\App::singleton()->setNamespace($namespace)->dispatch();

