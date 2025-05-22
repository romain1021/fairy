<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "vote")]
class Vote
{
    #[ORM\Id]
    #[ORM\Column(type: "integer")]
    private int $id_post;

    #[ORM\Id]
    #[ORM\Column(type: "integer")]
    private int $id_user;

    #[ORM\Column(type: "integer")]
    private int $note;


    public function getIdPost(): int
    {
        return $this->id_post;
    }

    public function setIdPost(int $idPost): self
    {
        $this->id_post = $idPost;
        return $this;
    }

    public function getIdUser(): int
    {
        return $this->id_user;
    }

    public function setIdUser(int $idUser): self
    {
        $this->id_user = $idUser;
        return $this;
    }

    public function getNote(): int
    {
        return $this->note;
    }

    public function setNote(int $note): self
    {
        $this->note = $note;
        return $this;
    }
    
    public static function findByIdNbVote(int $postId): int
    {
        return $entityManager->getRepository(self::class)
            ->count(['id_post' => $postId]);
    }

    public static function findByIdMoyenne(int $postId): float
    {
        $votes = $entityManager->getRepository(self::class)->findBy(['id_post' => $postId]);
        if (count($votes) === 0) {
            return 0.0;
        }
        $total = 0;
        foreach ($votes as $vote) {
            $total += $vote->getNote();
        }
        return $total / count($votes);
    }
}