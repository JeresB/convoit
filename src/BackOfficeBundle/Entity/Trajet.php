<?php

namespace BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trajet
 *
 * @ORM\Table(name="trajet")
 * @ORM\Entity(repositoryClass="BackOfficeBundle\Repository\TrajetRepository")
 */
class Trajet
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nb_km", type="string", length=45)
     */
    private $nbKm;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Internaute")
     * @ORM\JoinColumn(name="internaute_id", referencedColumnName="id")
     */
    private $internauteId;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Ville")
     * @ORM\JoinColumn(name="ville_id", referencedColumnName="id")
     */
    private $villeId;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Ville")
     * @ORM\JoinColumn(name="ville_id1", referencedColumnName="id")
     */
    private $villeId1;


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
     * Set nbKm
     *
     * @param string $nbKm
     *
     * @return Trajet
     */
    public function setNbKm($nbKm)
    {
        $this->nbKm = $nbKm;

        return $this;
    }

    /**
     * Get nbKm
     *
     * @return string
     */
    public function getNbKm()
    {
        return $this->nbKm;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Trajet
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set internauteId
     *
     * @param integer $internauteId
     *
     * @return Trajet
     */
    public function setInternauteId($internauteId)
    {
        $this->internauteId = $internauteId;

        return $this;
    }

    /**
     * Get internauteId
     *
     * @return int
     */
    public function getInternauteId()
    {
        return $this->internauteId;
    }

    /**
     * Set villeId
     *
     * @param integer $villeId
     *
     * @return Trajet
     */
    public function setVilleId($villeId)
    {
        $this->villeId = $villeId;

        return $this;
    }

    /**
     * Get villeId
     *
     * @return int
     */
    public function getVilleId()
    {
        return $this->villeId;
    }

    /**
     * Set villeId1
     *
     * @param integer $villeId1
     *
     * @return Trajet
     */
    public function setVilleId1($villeId1)
    {
        $this->villeId1 = $villeId1;

        return $this;
    }

    /**
     * Get villeId1
     *
     * @return int
     */
    public function getVilleId1()
    {
        return $this->villeId1;
    }
}
