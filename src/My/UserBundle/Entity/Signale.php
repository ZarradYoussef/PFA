<?php

namespace My\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Signale
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="My\UserBundle\Entity\SignaleRepository")
 */
class Signale
{
    /**
     * @ORM\ManyToOne(targetEntity="My\UserBundle\Entity\Produit",inversedBy="signales")
     * @ORM\JoinColumn(nullable=false)
     */
    private $produit;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="raison", type="text")
     */
    private $raison;

    /**
     * @ORM\ManyToOne(targetEntity="My\UserBundle\Entity\Membre")
     * @ORM\JoinColumn(nullable=false)
     */
    private $membre;
    
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
     * Set date
     *
     * @param \DateTime $date
     * @return Signale
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
     * Set raison
     *
     * @param string $raison
     * @return Signale
     */
    public function setRaison($raison)
    {
        $this->raison = $raison;

        return $this;
    }

    /**
     * Get raison
     *
     * @return string 
     */
    public function getRaison()
    {
        return $this->raison;
    }

    /**
     * Set membre
     *
     * @param \My\UserBundle\Entity\Membre $membre
     * @return Signale
     */
    public function setMembre(\My\UserBundle\Entity\Membre $membre)
    {
        $this->membre = $membre;

        return $this;
    }

    /**
     * Get membre
     *
     * @return \My\UserBundle\Entity\Membre 
     */
    public function getMembre()
    {
        return $this->membre;
    }
}
