<?php

namespace My\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SousCategorie
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="My\UserBundle\Entity\SousCategorieRepository")
 */
class SousCategorie
{
    /**
     * @ORM\ManyToOne(targetEntity="My\UserBundle\Entity\Categorie",inversedBy="sousCategories")
     * @ORM\JoinColumn(nullable=false)
     */
    private $categorie;
    
    /**
     * @ORM\OneToMany(targetEntity="My\UserBundle\Entity\Produit",mappedBy="sousCategorie")
     */
    protected $produits;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;


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
     * Set nom
     *
     * @param string $nom
     * @return SousCategorie
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }
}
