<?php

namespace BackOfficeBundle\Entity;

/**
 * Voiture
 */
class Voiture
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $voiture;

    /**
     * @var int
     */
    private $nbPlaces;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set voiture
     *
     * @param string $voiture
     *
     * @return Voiture
     */
    public function setVoiture($voiture)
    {
        $this->voiture = $voiture;

        return $this;
    }

    /**
     * Get voiture
     *
     * @return string
     */
    public function getVoiture()
    {
        return $this->voiture;
    }

    /**
     * Set nbPlaces
     *
     * @param integer $nbPlaces
     *
     * @return Voiture
     */
    public function setNbPlaces($nbPlaces)
    {
        $this->nbPlaces = $nbPlaces;

        return $this;
    }

    /**
     * Get nbPlaces
     *
     * @return int
     */
    public function getNbPlaces()
    {
        return $this->nbPlaces;
    }
}

