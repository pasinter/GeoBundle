<?php
namespace Pasinter\GeoBundle\Model;

interface AddressInterface
{
    /**
     * Get address type
     * @return string
     */
    function getType();
    
    /**
     * Set type of address - e.g. invoice or delivery
     * @param string $type
     */
    function setType($type);
    
    /**
     * Get street name
     */
    function getStreetName();
    
    /**
     * Set street
     * @param string $street
     */
    function setStreet($street);
    
    /**
     * Get street number
     */
    function getNumber();
    
    /**
     * Set street number
     * @param integer $number
     */
    
    function setNumber($number);

    
    /**
     * Get post code
     */
    function getPostCode();
    
    /**
     * Set zipcode
     * @param string $zipCode
     */
    function setPostCode($zipCode);
    
    /**
     * Get city name
     */
    function getCityName();
    
    
    /**
     * Get region name
     */
    function getRegionName();
    
    
    /**
     * Get country
     */
    function getCountry();
    
    /**
     * Set country
     * @param string $country
     */
    function setCountry($country);
}