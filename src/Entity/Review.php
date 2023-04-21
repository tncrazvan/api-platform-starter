<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\ReviewRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReviewRepository::class)]
#[ApiResource]
class Review {
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $rating = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $body = null;

    #[ORM\Column(length: 255)]
    private ?string $author = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $created = null;

    #[ORM\ManyToOne(inversedBy: 'reviews')]
    private ?Book $book = null;

    public function getId(): ?int {
        return $this->id;
    }

    public function getRating(): ?int {
        return $this->rating;
    }

    public function setRating(int $rating): self {
        $this->rating = $rating;

        return $this;
    }

    public function getBody(): ?string {
        return $this->body;
    }

    public function setBody(string $body): self {
        $this->body = $body;

        return $this;
    }

    public function getAuthor(): ?string {
        return $this->author;
    }

    public function setAuthor(string $author): self {
        $this->author = $author;

        return $this;
    }

    public function getCreated(): ?\DateTimeInterface {
        return $this->created;
    }

    public function setCreated(\DateTimeInterface $created): self {
        $this->created = $created;

        return $this;
    }

    public function getBook(): ?Book {
        return $this->book;
    }

    public function setBook(?Book $book): self {
        $this->book = $book;

        return $this;
    }
}
