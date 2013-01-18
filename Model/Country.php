<?php
namespace Pasinter\GeoBundle\Model;

class Country
{
    
    protected $code;
    protected $name;
    
    
    /**
     * 
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * 
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }
    
    /**
     * 
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

}