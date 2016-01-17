<?php

$config = [];

$config['produect']['simrp'] = [
    'host' => '127.0.0.1',
    'port' => 4732,
];

$config['dev']['simrp'] = [
    'host' => '127.0.0.1',
    'port' => 4732,
];

$config['test']['simrp'] = [
    'host' => '127.0.0.1',
    'port' => 4732,
];


switch ($_ENV['platform']) {
case 'dev':
    return $config['dev'];
case 'test':
    return $config['test'];
case 'product':
    return $config['product'];
}

