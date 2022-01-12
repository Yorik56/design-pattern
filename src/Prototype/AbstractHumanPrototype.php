<?php

namespace App\Prototype;

abstract class AbstractHumanPrototype
{
    protected string $firstName;
    protected string $lastName;
    protected string $genre;

    abstract public function __clone();

    public function __construct(string $firstName, string $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName  = $lastName;
    }

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return AbstractHumanPrototype
     */
    public function setFirstname(string $firstName): AbstractHumanPrototype
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return AbstractHumanPrototype
     */
    public function setLastname(string $lastName): AbstractHumanPrototype
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getGenre(): string
    {
        return $this->genre;
    }

    /**
     * @param string $genre
     * @return AbstractHumanPrototype
     */
    public function setGenre(string $genre): AbstractHumanPrototype
    {
        $this->genre = $genre;
        return $this;
    }

}