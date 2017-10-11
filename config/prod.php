<?php
/**
 * @Company     Buscapé Company
 * @package     Buscape_Shipping
 * @Code by     Murilo Santiago (murilo.santiago@fcamara.com.br)
 * @copyright   Copyright (c) 2017 (http://www.buscape.com.br)
 **/

# Twig
$app['twig.path'] = [__DIR__.'/../templates'];
$app['twig.options'] = ['cache' => __DIR__.'/../var/cache/twig'];

# Doctrine
$app['doctrine.connection'] = [
    'server' => 'mongodb://localhost:27017',
    'options' => []
];
$app['doctrine.configuration'] = [
    'proxy_dir' => __DIR__ . '/../var/cache/doctrine/proxies',
    'proxy_namespace' => 'Proxies',
    'hydrator_dir' => __DIR__ . '/../var/cache/doctrine/hydrators',
    'hydrator_namespace' => 'Hydrators',
    'entities_dir' => __DIR__ . '/..src/entities',
    'default_db' => 'shipping_prod'
];

# Redis
$app->register(new \Predis\Silex\ClientServiceProvider('redis'), [
    'predis.parameters' => 'tcp://127.0.0.1:6379',
    'predis.options'    => [
        'prefix'  => 'shipping_prod:',
        'profile' => '3.0',
    ],
]);
