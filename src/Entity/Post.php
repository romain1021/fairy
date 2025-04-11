<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "posts")]
class Post
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private int $id;

    #[ORM\Column(type: 'integer', nullable: true)]
    private ?int $userId = null;

    #[ORM\Column(type: 'text')]
    private string $content;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $mediaUrl = null;

    #[ORM\Column(type: 'integer', nullable: true)]
    private ?int $parentPostId = null;

    #[ORM\Column(type: 'json', nullable: true)]
    private ?array $likes = null;

    #[ORM\Column(type: 'json', nullable: true)]
    private ?array $hashtags = null;

    #[ORM\Column(type: 'datetime', nullable: true, options: ["default" => "CURRENT_TIMESTAMP"])]
    private ?\DateTime $createdAt = null;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $title = null;

    public function getId(): int
    {
        return $this->id;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(?int $userId): self
    {
        $this->userId = $userId;
        return $this;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;
        return $this;
    }

    public function getMediaUrl(): ?string
    {
        return $this->mediaUrl;
    }

    public function setMediaUrl(?string $mediaUrl): self
    {
        $this->mediaUrl = $mediaUrl;
        return $this;
    }

    public function getParentPostId(): ?int
    {
        return $this->parentPostId;
    }

    public function setParentPostId(?int $parentPostId): self
    {
        $this->parentPostId = $parentPostId;
        return $this;
    }

    public function getLikes(): ?array
    {
        return $this->likes;
    }

    public function setLikes(?array $likes): self
    {
        $this->likes = $likes;
        return $this;
    }

    public function getHashtags(): ?array
    {
        return $this->hashtags;
    }

    public function setHashtags(?array $hashtags): self
    {
        $this->hashtags = $hashtags;
        return $this;
    }

    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }
}
