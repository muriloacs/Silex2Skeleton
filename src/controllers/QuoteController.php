<?php
/**
 * @Company     Buscapé Company
 * @package     Buscape_Shipping
 * @Code by     Murilo Santiago (murilo.santiago@fcamara.com.br)
 * @copyright   Copyright (c) 2017 (http://www.buscape.com.br)
 **/

namespace App\Controllers;

use Symfony\Component\HttpFoundation\JsonResponse;
use App\Services\QuoteService;

/**
 * Class QuoteController
 * @package App\Controllers
 */
class QuoteController extends AbstractController
{
    /** @var QuoteService */
    protected $service;

    /**
     * Responds to POST HTTP method.
     * @return JsonResponse
     */
    public function postAction()
    {
        $quote = $this->service->quoteShipping();
        return new JsonResponse($quote, 200);
    }
}
