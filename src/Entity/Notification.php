<?php

namespace App\Entity;

use App\Repository\NotificationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NotificationRepository::class)]
class Notification
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private ?string $sender;

    #[ORM\Column(type: 'string', length: 255)]
    private ?string $recipient;

    #[ORM\Column(type: 'date')]
    private ?\DateTimeInterface $date_creation;

    #[ORM\Column(type: 'date', nullable: true)]
    private ?\DateTimeInterface $date_sent;

    #[ORM\Column(type: 'string', length: 2000, nullable: true)]
    private ?string $content;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $subject;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSender(): ?string
    {
        return $this->sender;
    }

    public function setSender(string $sender): self
    {
        $this->sender = $sender;

        return $this;
    }

    public function getRecipient(): ?string
    {
        return $this->recipient;
    }

    public function setRecipient(string $recipient): self
    {
        $this->recipient = $recipient;

        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->date_creation;
    }

    public function setDateCreation(\DateTimeInterface $date_creation): self
    {
        $this->date_creation = $date_creation;

        return $this;
    }

    public function getDateSent(): ?\DateTimeInterface
    {
        return $this->date_sent;
    }

    public function setDateSent(?\DateTimeInterface $date_sent): self
    {
        $this->date_sent = $date_sent;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(?string $subject): self
    {
        $this->subject = $subject;

        return $this;
    }
}
