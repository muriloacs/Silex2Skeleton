<?php
/**
 * @Company     Buscapé Company
 * @package     Buscape_Shipping
 * @Code by     Murilo Santiago (murilo.santiago@fcamara.com.br)
 * @copyright   Copyright (c) 2017 (http://www.buscape.com.br)
 **/

use App\Providers\DoctrineServiceProvider;
use App\Repositories\TrackingRepository;
use App\Repositories\QuoteRepository;
use App\Services\TrackingService;
use App\Services\QuoteService;
use App\Controllers\TrackingController;
use App\Controllers\QuoteController;

# Providers
$app->register(new DoctrineServiceProvider());

# Repositories
$app['tracking.repository'] = function () use ($app) {
    return new TrackingRepository($app['doctrine.dm']);
};
$app['quote.repository'] = function () use ($app) {
    return new QuoteRepository($app['doctrine.dm']);
};

# Services
$app['tracking.service'] = function () use ($app) {
    return new TrackingService($app['tracking.repository'], $app['redis']);
};
$app['quote.service'] = function () use ($app) {
    return new QuoteService($app['quote.repository'], $app['redis']);
};

# Controllers
$app['tracking.controller'] = function () use ($app) {
    return new TrackingController($app['tracking.service']);
};
$app['quote.controller'] = function () use ($app) {
    return new QuoteController($app['quote.service']);
};

# Routes
$controllers = $app['controllers_factory'];
$controllers->post('/quote', 'quote.controller:postAction');
$controllers->post('/tracking', 'tracking.controller:postAction');
$app->mount('/api', $controllers);
