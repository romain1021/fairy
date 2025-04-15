<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

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

    #[ORM\OneToMany(mappedBy: 'parentPost', targetEntity: Post::class, cascade: ['persist', 'remove'])]
    private Collection $reposts;

    #[ORM\ManyToOne(targetEntity: Post::class, inversedBy: 'reposts')]
    #[ORM\JoinColumn(name: 'parent_post_id', referencedColumnName: 'id', onDelete: 'SET NULL')]
    private ?Post $parentPost = null;

    public function __construct()
    {
        $this->reposts = new ArrayCollection();
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

    public function getParentPost(): ?Post
    {
        return $this->parentPost;
    }

    public function setParentPost(?Post $parentPost): self
    {
        $this->parentPost = $parentPost;

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

    public function addLike(int $userId): self
    {
        if (!in_array($userId, $this->likes ?? [])) {
            $this->likes[] = $userId;
        }

        return $this;
    }

    public function removeLike(int $userId): self
    {
        if (($key = array_search($userId, $this->likes ?? [])) !== false) {
            unset($this->likes[$key]);
            $this->likes = array_values($this->likes); // Réindexer le tableau
        }

        return $this;
    }

    public function getLikesCount(): int
    {
        return count($this->likes ?? []);
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

    public function getReposts(): Collection
    {
        return $this->reposts;
    }

    public function addRepost(Post $repost): self
    {
        if (!$this->reposts->contains($repost)) {
            $this->reposts[] = $repost;
            $repost->setParentPostId($this->id);
        }

        return $this;
    }

    public function removeRepost(Post $repost): self
    {
        if ($this->reposts->removeElement($repost)) {
            if ($repost->getParentPostId() === $this->id) {
                $repost->setParentPostId(null);
            }
        }

        return $this;
    }
}

