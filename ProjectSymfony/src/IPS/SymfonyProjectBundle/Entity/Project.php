<?php

namespace IPS\SymfonyProjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Project
 *
 * @ORM\Table(name="project")
 * @ORM\Entity(repositoryClass="IPS\SymfonyProjectBundle\Repository\ProjectRepository")
 */
class Project
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
     * @ORM\Column(name="NAME", type="string", length=255)
     */
    private $nAME;

    /**
     * @var string
     *
     * @ORM\Column(name="IMPORTANCE", type="string", length=255)
     */
    private $iMPORTANCE;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DEADLINE", type="datetime", nullable=true)
     */
    private $dEADLINE;

    /**
     * @var string
     *
     * @ORM\Column(name="DOMAIN", type="string", length=255)
     */
    private $dOMAIN;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMENT", type="text", nullable=true)
     */
    private $cOMMENT;


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
     * Set nAME
     *
     * @param string $nAME
     *
     * @return Project
     */
    public function setNAME($nAME)
    {
        $this->nAME = $nAME;

        return $this;
    }

    /**
     * Get nAME
     *
     * @return string
     */
    public function getNAME()
    {
        return $this->nAME;
    }

    /**
     * Set iMPORTANCE
     *
     * @param string $iMPORTANCE
     *
     * @return Project
     */
    public function setIMPORTANCE($iMPORTANCE)
    {
        $this->iMPORTANCE = $iMPORTANCE;

        return $this;
    }

    /**
     * Get iMPORTANCE
     *
     * @return string
     */
    public function getIMPORTANCE()
    {
        return $this->iMPORTANCE;
    }

    /**
     * Set dEADLINE
     *
     * @param \DateTime $dEADLINE
     *
     * @return Project
     */
    public function setDEADLINE($dEADLINE)
    {
        $this->dEADLINE = $dEADLINE;

        return $this;
    }

    /**
     * Get dEADLINE
     *
     * @return \DateTime
     */
    public function getDEADLINE()
    {
        return $this->dEADLINE;
    }

    /**
     * Set dOMAIN
     *
     * @param string $dOMAIN
     *
     * @return Project
     */
    public function setDOMAIN($dOMAIN)
    {
        $this->dOMAIN = $dOMAIN;

        return $this;
    }

    /**
     * Get dOMAIN
     *
     * @return string
     */
    public function getDOMAIN()
    {
        return $this->dOMAIN;
    }

    /**
     * Set cOMMENT
     *
     * @param string $cOMMENT
     *
     * @return Project
     */
    public function setCOMMENT($cOMMENT)
    {
        $this->cOMMENT = $cOMMENT;

        return $this;
    }

    /**
     * Get cOMMENT
     *
     * @return string
     */
    public function getCOMMENT()
    {
        return $this->cOMMENT;
    }

    public function __construct(){

    }

    function init($name,$importance,$deadline,$domain,$comment){
        $this->setNAME($name);
        $this->setIMPORTANCE($importance);
        $this->setDEADLINE(new \Datetime($deadline));
        $this->setDOMAIN($domain);
        $this->setCOMMENT($comment);
    }
}

