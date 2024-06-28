<?php
namespace App\Classes;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use date;
use DateTime;

#[ORM\Entity]
class User {

    // Property
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column()]
    private int $id;

    #[ORM\Column()]
    private string $name;

    #[ORM\Column()]
    private string $lastName;
    #[ORM\Column(type:'date')]
    private DateTime $dateDeNaissance;

    #[ORM\Column()]
    private string $email;
    #[ORM\Column()]
    private string $password;
    #[ORM\Column()]
    private string $photo;


   
    public function __construct(string $name, string $lastName, string $email,string $password, DateTime $dateDeNaissance,string $photo ) {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;
        $this->photo = $photo;
        $this->dateDeNaissance = $dateDeNaissance;
    }

    // Method





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
     * Get the value of lastName
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * Set the value of lastName
     */
    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get the value of dateDeNaissance
     */
    public function getDateDeNaissance(): DateTime
    {
        return $this->dateDeNaissance;
    }

    /**
     * Set the value of dateDeNaissance
     */
    public function setDateDeNaissance(DateTime $dateDeNaissance): self
    {
        $this->dateDeNaissance = $dateDeNaissance;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Set the value of email
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * Set the value of password
     */
    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of photo
     */
    public function getPhoto(): string
    {
        return $this->photo;
    }

    /**
     * Set the value of photo
     */
    public function setPhoto(string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }
}