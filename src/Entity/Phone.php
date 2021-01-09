<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\PhoneRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PhoneRepository::class)
 * @ApiResource()
 */
class Phone
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $number;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $phoneType;

    /**
     * @ORM\ManyToOne(targetEntity="Account", inversedBy="phone")
     */
    private $account;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumber(): ?string
    {
        return $this->number;
    }

    public function setNumber(string $number): self
    {
        $this->number = $number;

        return $this;
    }

    public function getPhoneType(): ?string
    {
        return $this->phoneType;
    }

    public function setPhoneType(string $phoneType): self
    {
        $this->phoneType = $phoneType;

        return $this;
    }

    public function getAccount(): ?string
    {
        return $this->account;
    }

    public function setAccount(string $account): self
    {
        $this->account = $account;

        return $this;
    }
}
