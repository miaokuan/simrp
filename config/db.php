<?php

$config = [];
$config['product']['simrp'] = [
    'host' => '127.0.0.1',
    'user' => 'simrp',
    'pass' => 'simrpxxx',
    'port' => 3306,
    'database' => 'simrp',
];

$config['dev']['simrp'] = [
    'host' => '127.0.0.1',
    'user' => 'simrp',
    'pass' => 'simrpxxx',
    'port' => 3306,
    'database' => 'simrp',
];
$config['test']['simrp'] = [
    'host' => '127.0.0.1',
    'user' => 'simrp',
    'pass' => 'simrpxxx',
    'port' => 3306,
    'database' => 'simrp',
];

switch ($_ENV['platform']) {
case 'dev':
    return $config['dev'];
case 'test':
    return $config['test'];
case 'product':
    return $config['product'];
}

