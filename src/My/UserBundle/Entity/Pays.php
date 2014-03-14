<?php

namespace My\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pays
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="My\UserBundle\Entity\PaysRepository")
 */
class Pays
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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="drapeaux", type="string", length=255)
     */
    private $drapeaux;


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
     * @return Pays
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

    /**
     * Set drapeaux
     *
     * @param string $drapeaux
     * @return Pays
     */
    public function setDrapeaux($drapeaux)
    {
        $this->drapeaux = $drapeaux;

        return $this;
    }

    /**
     * Get drapeaux
     *
     * @return string 
     */
    public function getDrapeaux()
    {
        return $this->drapeaux;
    }
}
