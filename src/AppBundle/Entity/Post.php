<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @ORM\Entity
 */
class Post
{
    const NUM_ITEMS = 10;
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string")
     */
    private $title;
    /**
     * @ORM\Column(type="string")
     */
    private $slug;
    /**
    * @ORM\Column(type="text")
    */
    private $content;
    /**
    * @ORM\Column(type="string")
    */
    private $authorEmail;
    /**
    * @ORM\Column(type="datetime")
    */
    private $publishedAt;
//     /**
//     * @ORM\OneToMany(
//     * targetEntity="Comment",
//     * mappedBy="post",
//     * orphanRemoval=true
//     * )
//     * @ORM\OrderBy({"publishedAt" = "ASC"})
//     */
//     private $comments;
    public function __construct()
    {
    $this->publishedAt = new \DateTime();
//     $this->comments = new ArrayCollection();
    }
    
    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id;
        return $this;
    }
    public function getTitle() {
        return $this->title;
    }
    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }
    public function getSlug() {
        return $this->slug;
    }
    public function setSlug($slug) {
        $this->slug = $slug;
        return $this;
    }
    public function getContent() {
        return $this->content;
    }
    public function setContent($content) {
        $this->content = $content;
        return $this;
    }
    public function getAuthorEmail() {
        return $this->authorEmail;
    }
    public function setAuthorEmail($authorEmail) {
        $this->authorEmail = $authorEmail;
        return $this;
    }
    public function getPublishedAt() {
        return $this->publishedAt;
    }
    public function setPublishedAt($publishedAt) {
        $this->publishedAt = $publishedAt;
        return $this;
    }
    public function getComments() {
        return $this->comments;
    }
    public function setComments($comments) {
        $this->comments = $comments;
        return $this;
    }
 
}