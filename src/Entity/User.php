<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity]
#[ORM\Table(name: "users")]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private ?int $id = null;

    #[ORM\Column(type: "string", length: 255, unique: true)]
    private string $username;

    #[ORM\Column(type: "string", length: 255, unique: true)]
    private string $email;

    #[ORM\Column(type: "string", length: 255)]
    private string $password;

    #[ORM\Column(type: "text", nullable: true)]
    private ?string $bio = null;

    #[ORM\Column(type: "string", length: 255, nullable: true)]
    #[Assert\Image(
        maxSize: '2M',
        mimeTypes: ['image/jpeg', 'image/png', 'image/gif'],
        mimeTypesMessage: 'Veuillez télécharger une image valide (JPEG, PNG, GIF).'
    )]
    private ?string $profilePicture = null;

    #[ORM\Column(type: "boolean")]
    private bool $isVerified = false;

    #[ORM\Column(type: "string", length: 255)]
    private string $role = 'user'; // Remplacer 'enum' par 'string'

    #[ORM\Column(type: "datetime", options: ["default" => "CURRENT_TIMESTAMP"])]
    private \DateTimeInterface $createdAt;

    public function __construct()
    {
        $this->createdAt = new \DateTime(); // Initialisation par défaut
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserIdentifier(): string
    {
        return $this->username;
    }

    public function getRoles(): array
    {
        return [$this->role]; // Return role(s) as an array
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;
        return $this;
    }

    public function getSalt(): ?string
    {
        return null; // No salt needed when using bcrypt or Argon2
    }

    public function getUsername(): ?string
    {
        return $this->username; // Supposant que la propriété `username` existe dans la classe User
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;
        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getBio(): ?string
    {
        return $this->bio;
    }

    public function setBio(?string $bio): self
    {
        $this->bio = $bio;
        return $this;
    }

    public function getProfilePicture(): ?string
    {
        return $this->profilePicture;
    }

    public function setProfilePicture(?string $profilePicture): self
    {
        $this->profilePicture = $profilePicture;
        return $this;
    }

    public function getProfilePictureUrl(): ?string
    {
        return $this->profilePicture ? '/uploads/profile_pictures/' . $this->profilePicture : null;
    }

    public function isVerified(): bool
    {
        return $this->isVerified;
    }

    public function setIsVerified(bool $isVerified): self
    {
        $this->isVerified = $isVerified;
        return $this;
    }

    public function getCreatedAt(): \DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function eraseCredentials(): void
    {
        // If storing any sensitive data temporarily, clear it here
    }

    public static function getUserById(int $id, object $entityManager): ?array
    {
        $userRepository = $entityManager->getRepository(self::class);
        $user = $userRepository->find($id);

        if (!$user) {
            return null;
        }

        return [
            'id' => $user->getId(),
            'username' => $user->getUsername(),
            'email' => $user->getEmail(),
            'bio' => $user->getBio(),
            'profilePicture' => $user->getProfilePicture(),
            'isVerified' => $user->isVerified(),
        ];
    }
}
