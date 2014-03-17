<?php

namespace My\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProduitEnchere
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="My\UserBundle\Entity\ProduitEnchereRepository")
 */
class ProduitEnchere extends Produit
{
    /**
     * @ORM\OneToMany(targetEntity="My\UserBundle\Entity\Enchere",mappedBy="produit")
     */
    protected $encheres;
    
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
     * @ORM\Column(name="prixDebut", type="float")
     */
    private $prixDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="duree", type="datetime")
     */
    private $duree;


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
     * Set prixDebut
     *
     * @param float $prixDebut
     * @return ProduitEnchere
     */
    public function setPrixDebut($prixDebut)
    {
        $this->prixDebut = $prixDebut;

        return $this;
    }

    /**
     * Get prixDebut
     *
     * @return float 
     */
    public function getPrixDebut()
    {
        return $this->prixDebut;
    }

    /**
     * Set duree
     *
     * @param \DateTime $duree
     * @return ProduitEnchere
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return \DateTime 
     */
    public function getDuree()
    {
        return $this->duree;
    }
}
