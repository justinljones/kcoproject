<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Articles")
 */
class Articles{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    
    protected $id;
    
    /**
     * @ORM\Column(type="text")
     */
    public $title;
    
    /**
     * @ORM\Column(type="text")
     */
    public $summary;
    
    /**
     * Set title
     *
     * @param string $title
     *
     * @return KCO_Project
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }
    
    /**
     * Set summary
     *
     * @param string $summary
     *
     * @return KCO_Project
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;

        return $this;
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
     * Get title
     *
     * @return integer
     */
    public function getTitle()
    {
        return $this->title;
    }
    
     /**
     * Get summary
     *
     * @return integer
     */
    public function getSummary()
    {
        return $this->summary;
    }
    
    
}
