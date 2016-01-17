<?php

require __DIR__ . '/../bootstrap.php';

$namespace = 'SimrpController\\';


Haf\Front::singleton()->setNamespace($namespace)->dispatch();

