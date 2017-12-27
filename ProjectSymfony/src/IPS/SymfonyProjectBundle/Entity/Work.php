<?php

namespace IPS\SymfonyProjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Work
 *
 * @ORM\Table(name="work")
 * @ORM\Entity(repositoryClass="IPS\SymfonyProjectBundle\Repository\WorkRepository")
 */
class Work
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
     * @ORM\Column(name="URL", type="string", length=255, nullable=true)
     */
    private $uRL;

    /**
     * @var string
     *
     * @ORM\Column(name="TYPE", type="string", length=255)
     */
    private $tYPE;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTENT", type="text", nullable=true)
     */
    private $cONTENT;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ADDDATE", type="datetime")
     */
    private $aDDDATE;

    /**
     * @var int
     *
     * @ORM\Column(name="SEEN", type="integer")
     */
    private $sEEN;

    /**
     * @ORM\ManyToOne(targetEntity="IPS\SymfonyProjectBundle\Entity\Task")
     * @ORM\JoinColumn(nullable=false)
     */
    private $TASK;

    public function setTASK(Task $task){
        $this->TASK = $task;
        return $this;
    }

    public function getTASK()
    {
        return $this->TASK;
    }

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
     * Set uRL
     *
     * @param string $uRL
     *
     * @return Work
     */
    public function setURL($uRL)
    {
        $this->uRL = $uRL;

        return $this;
    }

    /**
     * Get uRL
     *
     * @return string
     */
    public function getURL()
    {
        return $this->uRL;
    }

    /**
     * Set tYPE
     *
     * @param string $tYPE
     *
     * @return Work
     */
    public function setTYPE($tYPE)
    {
        $this->tYPE = $tYPE;

        return $this;
    }

    /**
     * Get tYPE
     *
     * @return string
     */
    public function getTYPE()
    {
        return $this->tYPE;
    }

    /**
     * Set cONTENT
     *
     * @param string $cONTENT
     *
     * @return Work
     */
    public function setCONTENT($cONTENT)
    {
        $this->cONTENT = $cONTENT;

        return $this;
    }

    /**
     * Get cONTENT
     *
     * @return string
     */
    public function getCONTENT()
    {
        return $this->cONTENT;
    }

    /**
     * Set aDDDATE
     *
     * @param \DateTime $aDDDATE
     *
     * @return Work
     */
    public function setADDDATE($aDDDATE)
    {
        $this->aDDDATE = $aDDDATE;

        return $this;
    }

    /**
     * Get aDDDATE
     *
     * @return \DateTime
     */
    public function getADDDATE()
    {
        return $this->aDDDATE;
    }

    /**
     * Set sEEN
     *
     * @param integer $sEEN
     *
     * @return Work
     */
    public function setSEEN($sEEN)
    {
        $this->sEEN = $sEEN;

        return $this;
    }

    /**
     * Get sEEN
     *
     * @return int
     */
    public function getSEEN()
    {
        return $this->sEEN;
    }

    private $file;
  
    public function getFile()
    {
      return $this->file;
    }
  
    public function setFile(UploadedFile $file = null)
    {
      $this->file = $file;
    }

    public function __construct(){

    }

    public function upload($proj,$sect,$task)
    {
    // Si jamais il n'y a pas de fichier (champ facultatif), on ne fait rien
    if (null === $this->file) {
        
      return;
    }
    $this->tYPE="file";
    // $this->setCONTENT(null);
    // On récupère le nom original du fichier de l'internaute
    $name = $this->file->getClientOriginalName();

    // On déplace le fichier envoyé dans le répertoire de notre choix
    $this->file->move($this->getUploadRootDir($proj,$sect,$task), $name);

    // On sauvegarde le nom de fichier dans notre attribut $url
    $this->uRL = $this->getUploadDir($proj,$sect,$task).'/'.$name;
    }
    public function getUploadDir($proj,$sect,$task)
    {
    // On retourne le chemin relatif vers l'image pour un navigateur (relatif au répertoire /web donc)
    return 'uploads/'.$proj.'/'.$sect.'/'.$task.'/works';
    }

    protected function getUploadRootDir($proj,$sect,$task)
    {
    // On retourne le chemin relatif vers l'image pour notre code PHP
    return __DIR__.'/../../../../web/'.$this->getUploadDir($proj,$sect,$task);
    }
}

