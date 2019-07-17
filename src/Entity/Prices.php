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
     * @ORM\ManyToOne(targetEntity="App\Entity\PublicType")
     * @ORM\JoinColumn(nullable=false)
     */
    private $public_id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Period")
     * @ORM\JoinColumn(nullable=false)
     */
    private $period_id;

    /**
     * @ORM\Column(type="float")
     */
    private $price;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPublicId(): ?PublicType
    {
        return $this->public_id;
    }

    public function setPublicId(?PublicType $public_id): self
    {
        $this->public_id = $public_id;

        return $this;
    }

    public function getPeriodId(): ?Period
    {
        return $this->period_id;
    }

    public function setPeriodId(?Period $period_id): self
    {
        $this->period_id = $period_id;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }
}
