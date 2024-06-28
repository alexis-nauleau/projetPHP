<?php
namespace App\Classes;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinTable;

#[ORM\Entity]
class Picture {

    // Property
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column()]
    private int $id;

    #[ORM\Column()]
    private string $name;

    #[ORM\Column()]
    private string $path;


    // Constructor
    public function __construct(string $name, string $path) {
        $this->name = $name;
        $this->path = $path;
    }






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
     * Get the value of name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of path
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * Set the value of path
     */
    public function setPath(string $path): self
    {
        $this->path = $path;

        return $this;
    }
}