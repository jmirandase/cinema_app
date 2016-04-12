<?php

use Zend\ServiceManager\ServiceManager;
use Zend\ServiceManager\Config;


$loader = include 'vendor/autoload.php';
$loader->add('Zend', 'vendor/zendframework/zend-servicemanager');
$loader->add('Cinema', 'src/');

$sm_config = [
];

$sm = new ServiceManager(new Config($sm_config));
