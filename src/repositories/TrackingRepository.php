<?php
/**
 * @Company     Buscapé Company
 * @package     Buscape_Shipping
 * @Code by     Murilo Santiago (murilo.santiago@fcamara.com.br)
 * @copyright   Copyright (c) 2017 (http://www.buscape.com.br)
 **/

namespace App\Repositories;

use App\Entities\TrackingEntity;
use App\Entities\InvoiceEntity;

/**
 * Class TrackingEntity
 * @package App\Repositories
 */
class TrackingRepository extends AbstractRepository
{
    /**
     * Creates a tracking on database.
     */
    public function create()
    {
        $invoice = new InvoiceEntity();
        $invoice->setNumber('019101910191091')
                ->setValue(100.90)
                ->setUrl('http://domain.com')
                ->setIssuanceDate('2017-09-15')
                ->setKey('POL9898AS');

        $tracking = new TrackingEntity();
        $tracking->setOrderId('00001010101AA')
                 ->setStatus('in_route')
                 ->setCode('BR800OPR5')
                 ->setInvoice($invoice);

        $this->dm->persist($tracking);
        $this->dm->flush();
    }
}
