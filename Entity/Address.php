<?php

namespace Pasinter\GeoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Address
 */
class Address
{
    /**
     * @var boolean
     */
    private $enabled;

    /**
     * @var \DateTime
     */
    private $activeFrom;

    /**
     * @var \DateTime
     */
    private $activeTo;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $street;

    /**
     * @var string
     */
    private $number;

    /**
     * @var string
     */
    private $postCode;

    /**
     * @var string
     */
    private $suburbName;

    /**
     * @var string
     */
    private $cityName;

    /**
     * @var string
     */
    private $regionName;

    /**
     * @var string
     */
    private $countryName;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Pasinter\GeoBundle\Entity\Suburb
     */
    private $suburb;

    /**
     * @var \Pasinter\GeoBundle\Entity\City
     */
    private $city;

    /**
     * @var \Pasinter\GeoBundle\Entity\Region
     */
    private $region;

    /**
     * @var \Pasinter\GeoBundle\Entity\Country
     */
    private $country;


    /**
     * Set enabled
     *
     * @param boolean $enabled
     * @return Address
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
    
        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean 
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set activeFrom
     *
     * @param \DateTime $activeFrom
     * @return Address
     */
    public function setActiveFrom($activeFrom)
    {
        $this->activeFrom = $activeFrom;
    
        return $this;
    }

    /**
     * Get activeFrom
     *
     * @return \DateTime 
     */
    public function getActiveFrom()
    {
        return $this->activeFrom;
    }

    /**
     * Set activeTo
     *
     * @param \DateTime $activeTo
     * @return Address
     */
    public function setActiveTo($activeTo)
    {
        $this->activeTo = $activeTo;
    
        return $this;
    }

    /**
     * Get activeTo
     *
     * @return \DateTime 
     */
    public function getActiveTo()
    {
        return $this->activeTo;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Address
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set street
     *
     * @param string $street
     * @return Address
     */
    public function setStreet($street)
    {
        $this->street = $street;
    
        return $this;
    }

    /**
     * Get street
     *
     * @return string 
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set number
     *
     * @param string $number
     * @return Address
     */
    public function setNumber($number)
    {
        $this->number = $number;
    
        return $this;
    }

    /**
     * Get number
     *
     * @return string 
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set postCode
     *
     * @param string $postCode
     * @return Address
     */
    public function setPostCode($postCode)
    {
        $this->postCode = $postCode;
    
        return $this;
    }

    /**
     * Get postCode
     *
     * @return string 
     */
    public function getPostCode()
    {
        return $this->postCode;
    }

    /**
     * Set suburbName
     *
     * @param string $suburbName
     * @return Address
     */
    public function setSuburbName($suburbName)
    {
        $this->suburbName = $suburbName;
    
        return $this;
    }

    /**
     * Get suburbName
     *
     * @return string 
     */
    public function getSuburbName()
    {
        return $this->suburbName;
    }

    /**
     * Set cityName
     *
     * @param string $cityName
     * @return Address
     */
    public function setCityName($cityName)
    {
        $this->cityName = $cityName;
    
        return $this;
    }

    /**
     * Get cityName
     *
     * @return string 
     */
    public function getCityName()
    {
        return $this->cityName;
    }

    /**
     * Set regionName
     *
     * @param string $regionName
     * @return Address
     */
    public function setRegionName($regionName)
    {
        $this->regionName = $regionName;
    
        return $this;
    }

    /**
     * Get regionName
     *
     * @return string 
     */
    public function getRegionName()
    {
        return $this->regionName;
    }

    /**
     * Set countryName
     *
     * @param string $countryName
     * @return Address
     */
    public function setCountryName($countryName)
    {
        $this->countryName = $countryName;
    
        return $this;
    }

    /**
     * Get countryName
     *
     * @return string 
     */
    public function getCountryName()
    {
        return $this->countryName;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Address
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    
        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Address
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    
        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set suburb
     *
     * @param \Pasinter\GeoBundle\Entity\Suburb $suburb
     * @return Address
     */
    public function setSuburb(\Pasinter\GeoBundle\Entity\Suburb $suburb = null)
    {
        $this->suburb = $suburb;
    
        return $this;
    }

    /**
     * Get suburb
     *
     * @return \Pasinter\GeoBundle\Entity\Suburb 
     */
    public function getSuburb()
    {
        return $this->suburb;
    }

    /**
     * Set city
     *
     * @param \Pasinter\GeoBundle\Entity\City $city
     * @return Address
     */
    public function setCity(\Pasinter\GeoBundle\Entity\City $city = null)
    {
        $this->city = $city;
    
        return $this;
    }

    /**
     * Get city
     *
     * @return \Pasinter\GeoBundle\Entity\City 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set region
     *
     * @param \Pasinter\GeoBundle\Entity\Region $region
     * @return Address
     */
    public function setRegion(\Pasinter\GeoBundle\Entity\Region $region = null)
    {
        $this->region = $region;
    
        return $this;
    }

    /**
     * Get region
     *
     * @return \Pasinter\GeoBundle\Entity\Region 
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set country
     *
     * @param \Pasinter\GeoBundle\Entity\Country $country
     * @return Address
     */
    public function setCountry(\Pasinter\GeoBundle\Entity\Country $country = null)
    {
        $this->country = $country;
    
        return $this;
    }

    /**
     * Get country
     *
     * @return \Pasinter\GeoBundle\Entity\Country 
     */
    public function getCountry()
    {
        return $this->country;
    }
}