<?php
/**
 * @Company     Buscapé Company
 * @package     Buscape_Shipping
 * @Code by     Murilo Santiago (murilo.santiago@fcamara.com.br)
 * @copyright   Copyright (c) 2017 (http://www.buscape.com.br)
 **/

namespace App\Services;

use App\Repositories\QuoteRepository;

/**
 * Class QuoteService
 * @package App\Services
 */
class QuoteService extends AbstractService
{
    /** @var QuoteRepository */
    protected $repository;

    /**
     * Quotes shipping.
     * @return mixed
     */
    public function quoteShipping()
    {
        $this->cache->set('BBB', 1);
        $file = file_get_contents(__DIR__.'/../../docs/api/quote/response.json');
        return json_decode($file);
    }
}
