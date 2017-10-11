<?php
/**
 * @Company     Buscapé Company
 * @package     Buscape_Shipping
 * @Code by     Murilo Santiago (murilo.santiago@fcamara.com.br)
 * @copyright   Copyright (c) 2017 (http://www.buscape.com.br)
 **/

namespace App\Providers;

use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Doctrine\MongoDB\Connection;
use Doctrine\ODM\MongoDB\Configuration;
use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ODM\MongoDB\Mapping\Driver\AnnotationDriver;

/**
 * Class DoctrineServiceProvider
 * @package App\Providers
 */
class DoctrineServiceProvider implements ServiceProviderInterface
{
    /**
     * Registers doctrine mongo document manager.
     * @param Container $app
     */
    public function register(Container $app)
    {
        $app['doctrine.dm'] = DocumentManager::create(
            $this->getConnection($app['doctrine.connection']),
            $this->getConfiguration($app['doctrine.configuration'])
        );
    }

    /**
     * Returns connection object.
     * @param array $data
     * @return Connection
     */
    private function getConnection($data)
    {
        return new Connection($data['server'], $data['options']);
    }

    /**Returns config object.
     * @param array $data
     * @return Configuration
     */
    private function getConfiguration($data)
    {
        $config = new Configuration();
        $config->setProxyDir($data['proxy_dir']);
        $config->setProxyNamespace($data['proxy_namespace']);
        $config->setHydratorDir($data['hydrator_dir']);
        $config->setHydratorNamespace($data['hydrator_namespace']);
        $config->setDefaultDB($data['default_db']);
        $config->setMetadataDriverImpl(AnnotationDriver::create($data['entities_dir']));
        AnnotationDriver::registerAnnotationClasses();

        return $config;
    }
}
