<?php
/**
 * @Company     Buscapé Company
 * @package     Buscape_Shipping
 * @Code by     Murilo Santiago (murilo.santiago@fcamara.com.br)
 * @copyright   Copyright (c) 2017 (http://www.buscape.com.br)
 **/

namespace App\Services;

use App\Repositories\AbstractRepository;
use \Predis\Client as RedisClient;

/**
 * Class AbstractService
 * @package App\Services
 */
class AbstractService
{
    /** @var AbstractRepository */
    protected $repository;

    /** @var  RedisClient */
    protected $cache;

    /**
     * AbstractService constructor.
     * @param AbstractRepository $repository
     * @param \Predis\Client $cache
     */
    public function __construct(AbstractRepository $repository, RedisClient $cache)
    {
        $this->repository = $repository;
        $this->cache = $cache;
    }
}
