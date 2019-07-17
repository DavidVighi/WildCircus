<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PricesRepository")
 */
class Prices
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
    private $days;

    /**
     * @ORM\Column(type="integer")
     */
    private $adultprices;

    /**
     * @ORM\Column(type="integer")
     */
    private $kidsprice;

    /**
     * @ORM\Column(type="integer")
     */
    private $groups;

    /**
     * @ORM\Column(type="integer")
     */
    private $school;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDays(): ?string
    {
        return $this->days;
    }

    public function setDays(string $days): self
    {
        $this->days = $days;

        return $this;
    }

    public function getAdultprices(): ?string
    {
        return $this->adultprices;
    }

    public function setAdultprices(string $adultprices): self
    {
        $this->adultprices = $adultprices;

        return $this;
    }

    public function getKidsprice(): ?int
    {
        return $this->kidsprice;
    }

    public function setKidsprice(int $kidsprice): self
    {
        $this->kidsprice = $kidsprice;

        return $this;
    }

    public function getGroups(): ?int
    {
        return $this->groups;
    }

    public function setGroups(int $groups): self
    {
        $this->groups = $groups;

        return $this;
    }

    public function getSchool(): ?int
    {
        return $this->school;
    }

    public function setSchool(int $school): self
    {
        $this->school = $school;

        return $this;
    }
}
