<?php

namespace Pasinter\GeoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Suburb
 */
class Suburb
{
    /**
     * @var boolean
     */
    private $active;

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
     * @var \Pasinter\GeoBundle\Entity\City
     */
    private $city;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->addresses = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set active
     *
     * @param boolean $active
     * @return Suburb
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
     * Set name
     *
     * @param string $name
     * @return Suburb
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
     * @return Suburb
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
     * @return Suburb
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
     * @return Suburb
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
     * Set city
     *
     * @param \Pasinter\GeoBundle\Entity\City $city
     * @return Suburb
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
}