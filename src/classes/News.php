<?php
namespace App\Classes;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class News {


    #[ORM\Id]
    #[ORM\GeneratedValue]
    
    #[ORM\Column()]
    private int $id;

    #[ORM\Column()]
    private string $title;
    #[ORM\Column()]
    private string $description;

    #[ORM\Column()]
    private string $pubDate;

    #[ORM\Column()]
    private string $link;
    #[ORM\Column()]
    private string $guid;
    #[ORM\Column()]
    private string $enclosure;
    //////////////////////////////////
    #[ORM\Column(type : 'string', nullable:true)]
    private string $creator;
    #[ORM\Column(type : 'string', nullable:true)]
    private string $comments;


    //Constructor
    // public function __construct(string $title, string $description,string $pubDate, string $link,string $guid ,string $enclosure,
    // string $creator,string $comments) {

    //     $this->title = $title;
    //     $this->description = $description;
    //     $this->pubDate = $pubDate;
    //     $this->link = $link;
    //     $this->guid  = $guid ;
    //     $this->enclosure = $enclosure;

    //     $this->creator = $creator;
    //     $this->comments = $comments;

    // }



    /**
     * Get the value of id
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of title
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set the value of title
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set the value of description
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of pubDate
     */
    public function getPubDate(): string
    {
        return $this->pubDate;
    }

    /**
     * Set the value of pubDate
     */
    public function setPubDate(string $pubDate): self
    {
        $this->pubDate = $pubDate;

        return $this;
    }

    /**
     * Get the value of link
     */
    public function getLink(): string
    {
        return $this->link;
    }

    /**
     * Set the value of link
     */
    public function setLink(string $link): self
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get the value of guid
     */
    public function getGuid(): string
    {
        return $this->guid;
    }

    /**
     * Set the value of guid
     */
    public function setGuid(string $guid): self
    {
        $this->guid = $guid;

        return $this;
    }

    /**
     * Get the value of enclosure
     */
    public function getEnclosure(): string
    {
        return $this->enclosure;
    }

    /**
     * Set the value of enclosure
     */
    public function setEnclosure(string $enclosure): self
    {
        $this->enclosure = $enclosure;

        return $this;
    }

    /**
     * Get the value of creator
     */
    public function getCreator(): string
    {
        return $this->creator;
    }

    /**
     * Set the value of creator
     */
    public function setCreator(string $creator): self
    {
        $this->creator = $creator;

        return $this;
    }

    /**
     * Get the value of comments
     */
    public function getComments(): string
    {
        return $this->comments;
    }

    /**
     * Set the value of comments
     */
    public function setComments(string $comments): self
    {
        $this->comments = $comments;

        return $this;
    }
}