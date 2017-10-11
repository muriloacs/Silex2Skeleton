<?php
/**
 * @Company     Buscapé Company
 * @package     Buscape_Shipping
 * @Code by     Murilo Santiago (murilo.santiago@fcamara.com.br)
 * @copyright   Copyright (c) 2017 (http://www.buscape.com.br)
 **/

namespace App\Controllers;

use App\Services\AbstractService;

/**
 * Class AbstractController
 * @package App\Controllers
 */
class AbstractController
{
    /** @var AbstractService */
    protected $service;

    /**
     * AbstractController constructor.
     * @param AbstractService $service
     */
    public function __construct(AbstractService $service)
    {
        $this->service = $service;
    }
}
