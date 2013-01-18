<?php
namespace Pasinter\GeoBundle\Model;

class Address implements AddressInterface
{
    const INVOICE        = 'INVOICE';
    const DELIVERY       = 'DELIVERY';
    const CONTACT        = 'CONTACT';
    
    protected $type = 'default';
    protected $street;
    protected $number;
    protected $postCode;
    protected $city;
    protected $region;
    protected $country;
    
    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * {@inheritdoc}
     */
    public function setType($type)
    {
        $this->type = $type;
    }
    
	/**
	 * {@inheritdoc}
	 */
    public function getStreet()
    {
        return $this->street;
    }

	/**
	 * {@inheritdoc}
	 */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * {@inheritdoc}
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * {@inheritdoc}
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * {@inheritdoc}
     */
    public function getPostCode()
    {
        return $this->postCode;
    }

    /**
     * {@inheritdoc}
     */
    public function setPostCode($postCode)
    {
        $this->postCode = $postCode;
    }

    /**
     * {@inheritdoc}
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * {@inheritdoc}
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * {@inheritdoc}
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * {@inheritdoc}
     */
    public function setRegion($region)
    {
        $this->region = $region;
    }

    /**
     * {@inheritdoc}
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * {@inheritdoc}
    */
    public function setCountry($country)
    {
        $this->country = $country;
    }
}