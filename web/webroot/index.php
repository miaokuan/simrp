<?php

$_ENV['platform'] = 'dev'; //dev test product
require __DIR__ . '/../bootstrap.php';

$namespace = 'SimrpController\\';


Haf\Front::singleton()->setNamespace($namespace)->dispatch();

