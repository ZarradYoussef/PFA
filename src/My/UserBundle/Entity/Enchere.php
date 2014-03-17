<?php

namespace My\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Enchere
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="My\UserBundle\Entity\EnchereRepository")
 */
class Enchere
{
    /**
     * @ORM\ManyToOne(targetEntity="My\UserBundle\Entity\ProduitEnchere",inversedBy="encheres")
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
     * @var float
     *
     * @ORM\Column(name="offre", type="float")
     */
    private $offre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;
    
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
     * Set offre
     *
     * @param float $offre
     * @return Enchere
     */
    public function setOffre($offre)
    {
        $this->offre = $offre;

        return $this;
    }

    /**
     * Get offre
     *
     * @return float 
     */
    public function getOffre()
    {
        return $this->offre;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Enchere
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
     * Set membre
     *
     * @param \My\UserBundle\Entity\Membre $membre
     * @return Enchere
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
