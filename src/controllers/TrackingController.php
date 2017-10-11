<?php
/**
 * @Company     Buscapé Company
 * @package     Buscape_Shipping
 * @Code by     Murilo Santiago (murilo.santiago@fcamara.com.br)
 * @copyright   Copyright (c) 2017 (http://www.buscape.com.br)
 **/

namespace App\Controllers;

use Symfony\Component\HttpFoundation\JsonResponse;
use App\Services\TrackingService;

/**
 * Class TrackingController
 * @package App\Controllers
 */
class TrackingController extends AbstractController
{
    /** @var TrackingService  */
    protected $service;

    /**
     * Responds to POST HTTP method.
     * @return JsonResponse
     */
    public function postAction()
    {
        $json = $this->service->trackShipping();
        return new JsonResponse($json, 200);
    }
}
