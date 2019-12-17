<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SejourRepository")
 */
class Sejour
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=128, nullable=true)
     */
    private $sejintitule;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $sejmontantmbi;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $sejdtedeb;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $sejduree;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSejintitule(): ?string
    {
        return $this->sejintitule;
    }

    public function setSejintitule(?string $sejintitule): self
    {
        $this->sejintitule = $sejintitule;

        return $this;
    }

    public function getSejmontantmbi(): ?string
    {
        return $this->sejmontantmbi;
    }

    public function setSejmontantmbi(?string $sejmontantmbi): self
    {
        $this->sejmontantmbi = $sejmontantmbi;

        return $this;
    }

    public function getSejdtedeb(): ?\DateTimeInterface
    {
        return $this->sejdtedeb;
    }

    public function setSejdtedeb(?\DateTimeInterface $sejdtedeb): self
    {
        $this->sejdtedeb = $sejdtedeb;

        return $this;
    }

    public function getSejduree(): ?int
    {
        return $this->sejduree;
    }

    public function setSejduree(?int $sejduree): self
    {
        $this->sejduree = $sejduree;

        return $this;
    }
    
    /**
     * Retourne la date de fin de séjour
     * @return mixed
     */
    public function getSejDteFin(): ?\DateTimeInterface
    {
        //return $this->sejDteDeb + $this->sejDuree;
        $duree = $this->getSejDuree();
        $SejDteFin = $this->getSejDteDeb();
        $SejDteFin->modify("+".$duree."day");
        
        return $SejDteFin;
    }
    
    /**
     * Formatage jj-mm-aaaa
     * @param $pDte : date à formater
     * @return mixed
     */
    public function getSejDteFormatFR($pDte)
    {
        return substr($pDte, -2).substr($pDte, -5, 2).substr($pDte, 4);
    }
}
