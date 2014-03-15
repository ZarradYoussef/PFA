<?php

namespace My\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Compte
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="My\UserBundle\Entity\CompteRepository")
 */
class Compte
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="solde", type="float")
     */
    private $solde;
    
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
     * Set solde
     *
     * @param float $solde
     * @return Compte
     */
    public function setSolde($solde)
    {
        $this->solde = $solde;

        return $this;
    }

    /**
     * Get solde
     *
     * @return float 
     */
    public function getSolde()
    {
        return $this->solde;
    }

    /**
     * Set membre
     *
     * @param \My\UserBundle\Entity\Membre $membre
     * @return Compte
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
