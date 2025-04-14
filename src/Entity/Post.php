<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;

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

    private ?EntityManagerInterface $entityManager = null;

    private static ?EntityManagerInterface $globalEntityManager = null;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public static function setGlobalEntityManager(EntityManagerInterface $entityManager): void
    {
        self::$globalEntityManager = $entityManager;
    }

    public function setEntityManager(EntityManagerInterface $entityManager): void
    {
        $this->entityManager = $entityManager;
    }

    public function getEntityManager(): ?EntityManagerInterface
    {
        return $this->entityManager ?? self::$globalEntityManager;
    }

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

    public function setUser(?User $user): self
    {
        $this->userId = $user?->getId();

        return $this;
    }

    public function getUser(): ?User
    {
        if ($this->userId === null) {
            return null;
        }

        $entityManager = $this->getEntityManager();
        if ($entityManager === null) {
            throw new \LogicException('EntityManager is not set. Ensure it is properly configured.');
        }

        $userRepository = $entityManager->getRepository(User::class);
        return $userRepository->find($this->userId);
    }

    public function getUserName(): ?string
    {
        $user = $this->getUser();
        return $user ? $user->getUsername() : 'Utilisateur inconnu';
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
}

