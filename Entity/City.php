<?php

namespace Pasinter\GeoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * City
 */
class City
{
    /**
     * @var boolean
     */
    private $active;

    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $name;

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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $addresses;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $suburbs;

    /**
     * @var \Pasinter\GeoBundle\Entity\Region
     */
    private $region;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->addresses = new \Doctrine\Common\Collections\ArrayCollection();
        $this->suburbs = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set active
     *
     * @param boolean $active
     * @return City
     */
    public function setActive($active)
    {
        $this->active = $active;
    
        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return City
     */
    public function setCode($code)
    {
        $this->code = $code;
    
        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return City
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return City
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
     * @return City
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
     * Add addresses
     *
     * @param \Pasinter\GeoBundle\Entity\Address $addresses
     * @return City
     */
    public function addAddresse(\Pasinter\GeoBundle\Entity\Address $addresses)
    {
        $this->addresses[] = $addresses;
    
        return $this;
    }

    /**
     * Remove addresses
     *
     * @param \Pasinter\GeoBundle\Entity\Address $addresses
     */
    public function removeAddresse(\Pasinter\GeoBundle\Entity\Address $addresses)
    {
        $this->addresses->removeElement($addresses);
    }

    /**
     * Get addresses
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * Add suburbs
     *
     * @param \Pasinter\GeoBundle\Entity\Suburb $suburbs
     * @return City
     */
    public function addSuburb(\Pasinter\GeoBundle\Entity\Suburb $suburbs)
    {
        $this->suburbs[] = $suburbs;
    
        return $this;
    }

    /**
     * Remove suburbs
     *
     * @param \Pasinter\GeoBundle\Entity\Suburb $suburbs
     */
    public function removeSuburb(\Pasinter\GeoBundle\Entity\Suburb $suburbs)
    {
        $this->suburbs->removeElement($suburbs);
    }

    /**
     * Get suburbs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSuburbs()
    {
        return $this->suburbs;
    }

    /**
     * Set region
     *
     * @param \Pasinter\GeoBundle\Entity\Region $region
     * @return City
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
}