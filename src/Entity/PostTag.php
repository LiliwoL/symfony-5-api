<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PostTag
 *
 * @ORM\Table(name="post_tag", indexes={@ORM\Index(name="IDX_6ABC1CC4BAD26311", columns={"tag_id"}), @ORM\Index(name="IDX_6ABC1CC44B89032C", columns={"post_id"})})
 * @ORM\Entity
 */
class PostTag
{
    /**
     * @var int
     *
     * @ORM\Column(name="post_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $postId;

    /**
     * @var int
     *
     * @ORM\Column(name="tag_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tagId;

    public function getPostId(): ?int
    {
        return $this->postId;
    }

    public function getTagId(): ?int
    {
        return $this->tagId;
    }


}
