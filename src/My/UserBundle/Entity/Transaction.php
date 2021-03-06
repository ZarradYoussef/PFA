<?php

namespace My\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transaction
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="My\UserBundle\Entity\TransactionRepository")
 */
class Transaction
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
     * @ORM\Column(name="manton", type="float")
     */
    private $manton;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;
    
    /**
     * @ORM\OneToOne(targetEntity="My\UserBundle\Entity\Enchere",cascade={"persist"})
     */
    private $enchere;
    
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
     * Set manton
     *
     * @param float $manton
     * @return Transaction
     */
    public function setManton($manton)
    {
        $this->manton = $manton;

        return $this;
    }

    /**
     * Get manton
     *
     * @return float 
     */
    public function getManton()
    {
        return $this->manton;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Transaction
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
     * Set enchere
     *
     * @param \My\UserBundle\Entity\Enchere $enchere
     * @return Transaction
     */
    public function setEnchere(\My\UserBundle\Entity\Enchere $enchere = null)
    {
        $this->enchere = $enchere;

        return $this;
    }

    /**
     * Get enchere
     *
     * @return \My\UserBundle\Entity\Enchere 
     */
    public function getEnchere()
    {
        return $this->enchere;
    }
}
