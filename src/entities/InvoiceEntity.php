<?php
/**
 * @Company     Buscapé Company
 * @package     Buscape_Shipping
 * @Code by     Murilo Santiago (murilo.santiago@fcamara.com.br)
 * @copyright   Copyright (c) 2017 (http://www.buscape.com.br)
 **/

namespace App\Entities;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/** @ODM\Document */
class InvoiceEntity
{
    /** @ODM\Id */
    private $id;

    /** @ODM\Field(type="string") */
    private $number;

    /** @ODM\Field(type="float") */
    private $value;

    /** @ODM\Field(type="string") */
    private $url;

    /** @ODM\Field(type="string") */
    private $issuanceDate;

    /** @ODM\Field(type="string") */
    private $key;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param $number
     * @return $this
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIssuanceDate()
    {
        return $this->issuanceDate;
    }

    /**
     * @param $issuanceDate
     * @return $this
     */
    public function setIssuanceDate($issuanceDate)
    {
        $this->issuanceDate = $issuanceDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param $key
     * @return $this
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }
}
