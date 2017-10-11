<?php
/**
 * @Company     Buscapé Company
 * @package     Buscape_Shipping
 * @Code by     Murilo Santiago (murilo.santiago@fcamara.com.br)
 * @copyright   Copyright (c) 2017 (http://www.buscape.com.br)
 **/

namespace App\Services;

use App\Repositories\TrackingRepository;

/**
 * Class TrackingService
 * @package App\Services
 */
class TrackingService extends AbstractService
{
    /** @var TrackingRepository */
    protected $repository;

    /**
     * Tracks shipping.
     * @return mixed
     */
    public function trackShipping()
    {
        $this->repository->create();
        $this->cache->set('AAA', 1);
        $file = file_get_contents(__DIR__.'/../../docs/api/tracking/response.json');
        return json_decode($file);
    }
}
