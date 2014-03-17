<?php

namespace My\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="My\UserBundle\Entity\ProduitRepository")
 */
class Produit
{
    /**
     * @ORM\OneToOne(targetEntity="Sdz\BlogBundle\Entity\Membre",cascade={"persist"})
     */
    protected $membre;
    
    /**
     * @ORM\OneToMany(targetEntity="My\UserBundle\Entity\Image",mappedBy="produit")
     */
    protected $imajes;
    
    /**
     * @ORM\OneToMany(targetEntity="My\UserBundle\Entity\Commentaire",mappedBy="produit")
     */
    protected $commentaires;
    
    /**
     * @ORM\OneToMany(targetEntity="My\UserBundle\Entity\Suivre",mappedBy="produit")
     */
    protected $suivres;
    
    /**
     * @ORM\OneToMany(targetEntity="My\UserBundle\Entity\Signale",mappedBy="produit")
     */
    protected $signales;
    
    /**
     * @ORM\ManyToOne(targetEntity="My\UserBundle\Entity\SousCategorie",inversedBy="produits")
     * @ORM\JoinColumn(nullable=false)
     */
    private $sousCategorie;
    
    /**
     * @ORM\ManyToOne(targetEntity="My\UserBundle\Entity\Marque",inversedBy="produits")
     * @ORM\JoinColumn(nullable=false)
     */
    private $marque;
    
    /**
     * @ORM\ManyToOne(targetEntity="My\UserBundle\Entity\Etat",inversedBy="produits")
     * @ORM\JoinColumn(nullable=false)
     */
    private $etat;
    
    
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="model", type="string", length=255)
     */
    protected $model;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    protected $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateMise", type="datetime")
     */
    protected $dateMise;

    /**
     * @var string
     *
     * @ORM\Column(name="livraison", type="text")
     */
    protected $livraison;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbVue", type="integer")
     */
    protected $nbVue;


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
     * Set model
     *
     * @param string $model
     * @return Produit
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string 
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Produit
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set dateMise
     *
     * @param \DateTime $dateMise
     * @return Produit
     */
    public function setDateMise($dateMise)
    {
        $this->dateMise = $dateMise;

        return $this;
    }

    /**
     * Get dateMise
     *
     * @return \DateTime 
     */
    public function getDateMise()
    {
        return $this->dateMise;
    }

    /**
     * Set livraison
     *
     * @param string $livraison
     * @return Produit
     */
    public function setLivraison($livraison)
    {
        $this->livraison = $livraison;

        return $this;
    }

    /**
     * Get livraison
     *
     * @return string 
     */
    public function getLivraison()
    {
        return $this->livraison;
    }

    /**
     * Set nbVue
     *
     * @param integer $nbVue
     * @return Produit
     */
    public function setNbVue($nbVue)
    {
        $this->nbVue = $nbVue;

        return $this;
    }

    /**
     * Get nbVue
     *
     * @return integer 
     */
    public function getNbVue()
    {
        return $this->nbVue;
    }
}
