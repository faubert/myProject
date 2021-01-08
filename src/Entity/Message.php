<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\MessageRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MessageRepository::class)
 * @ApiResource()
 */
class Message
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mailFrom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mailTo;

    /**
     * @ORM\Column(type="text")
     */
    private $content;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMailFrom(): ?string
    {
        return $this->mailFrom;
    }

    public function setMailFrom(string $mailFrom): self
    {
        $this->mailFrom = $mailFrom;

        return $this;
    }

    public function getMailTo(): ?string
    {
        return $this->mailTo;
    }

    public function setMailTo(string $mailTo): self
    {
        $this->mailTo = $mailTo;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }
}
