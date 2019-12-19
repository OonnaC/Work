<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SimulRepository")
 */
class Simul
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $famNom;

    /**
     * @ORM\Column(type="smallint")
     */
    private $famNbEnfant;

    /**
     * @ORM\Column(type="integer")
     */
    private $famQF;

    /**
     * @ORM\Column(type="smallint")
     */
    private $simulNbEnfPartant;

    /**
     * @ORM\Column(type="smallint")
     */
    private $simulReducQF;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $simulReducFamilleNombreuse;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $simulReducDepartMultiple;

    /**
     * @ORM\Column(type="integer")
     */
    private $simulSousTotal;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    private $simulTotalApresReduc;

    /**
     * @ORM\Column(type="integer")
     */
    private $simulTotalApresPlafond;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $simulTotalDepartMultiple;

    /**
     * @ORM\Column(type="integer")
     */
    private $sejNo;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $sejMBI;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFamNom(): ?string
    {
        return $this->famNom;
    }

    public function setFamNom(string $famNom): self
    {
        $this->famNom = $famNom;

        return $this;
    }

    public function getFamNbEnfant(): ?int
    {
        return $this->famNbEnfant;
    }

    public function setFamNbEnfant(int $famNbEnfant): self
    {
        $this->famNbEnfant = $famNbEnfant;

        return $this;
    }

    public function getFamQF(): ?int
    {
        return $this->famQF;
    }

    public function setFamQF(int $famQF): self
    {
        $this->famQF = $famQF;

        return $this;
    }

    public function getSimulNbEnfPartant(): ?int
    {
        return $this->simulNbEnfPartant;
    }

    public function setSimulNbEnfPartant(int $simulNbEnfPartant): self
    {
        $this->simulNbEnfPartant = $simulNbEnfPartant;

        return $this;
    }

    public function getSimulReducQF(): ?int
    {
        return $this->simulReducQF;
    }

    public function setSimulReducQF(int $simulReducQF): self
    {
        $this->simulReducQF = $simulReducQF;

        return $this;
    }

    public function getSimulReducFamilleNombreuse(): ?int
    {
        return $this->simulReducFamilleNombreuse;
    }

    public function setSimulReducFamilleNombreuse(?int $simulReducFamilleNombreuse): self
    {
        $this->simulReducFamilleNombreuse = $simulReducFamilleNombreuse;

        return $this;
    }

    public function getSimulReducDepartMultiple(): ?int
    {
        return $this->simulReducDepartMultiple;
    }

    public function setSimulReducDepartMultiple(?int $simulReducDepartMultiple): self
    {
        $this->simulReducDepartMultiple = $simulReducDepartMultiple;

        return $this;
    }

    public function getSimulSousTotal(): ?int
    {
        return $this->simulSousTotal;
    }

    public function setSimulSousTotal(int $simulSousTotal): self
    {
        $this->simulSousTotal = $simulSousTotal;

        return $this;
    }

    public function getSimulTotalApresReduc(): ?string
    {
        return $this->simulTotalApresReduc;
    }

    public function setSimulTotalApresReduc(string $simulTotalApresReduc): self
    {
        $this->simulTotalApresReduc = $simulTotalApresReduc;

        return $this;
    }

    public function getSimulTotalApresPlafond(): ?int
    {
        return $this->simulTotalApresPlafond;
    }

    public function setSimulTotalApresPlafond(int $simulTotalApresPlafond): self
    {
        $this->simulTotalApresPlafond = $simulTotalApresPlafond;

        return $this;
    }

    public function getSimulTotalDepartMultiple(): ?int
    {
        return $this->simulTotalDepartMultiple;
    }

    public function setSimulTotalDepartMultiple(?int $simulTotalDepartMultiple): self
    {
        $this->simulTotalDepartMultiple = $simulTotalDepartMultiple;

        return $this;
    }

    public function getSejNo(): ?int
    {
        return $this->sejNo;
    }

    public function setSejNo(int $sejNo): self
    {
        $this->sejNo = $sejNo;

        return $this;
    }

    public function getSejMBI(): ?string
    {
        return $this->sejMBI;
    }

    public function setSejMBI(?string $sejMBI): self
    {
        $this->sejMBI = $sejMBI;

        return $this;
    }
}
