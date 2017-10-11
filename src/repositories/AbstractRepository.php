<?php
/**
 * @Company     Buscapé Company
 * @package     Buscape_Shipping
 * @Code by     Murilo Santiago (murilo.santiago@fcamara.com.br)
 * @copyright   Copyright (c) 2017 (http://www.buscape.com.br)
 **/

namespace App\Repositories;

use Doctrine\ODM\MongoDB\DocumentManager;

/**
 * Class AbstractRepository
 * @package App\Repositories
 */
abstract class AbstractRepository
{
    /** @var  DocumentManager */
    protected $dm;

    /**
     * AbstractRepository constructor.
     * @param DocumentManager $dm
     */
    public function __construct(DocumentManager $dm)
    {
        $this->dm = $dm;
    }
}
