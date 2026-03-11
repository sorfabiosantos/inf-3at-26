<?php

namespace source\Models\Course;

class Instructor extends User
{
    private $degree;
    private $bio;

    public function __construct(
        int $id = null,
        string $name = null,
        string $email = null,
        string $password = null,
        string $degree = null,
        string $bio = null
    )
    {
        parent::__construct($id, $name, $email, $password);
        $this->degree = $degree;
        $this->bio = $bio;
    }

    public function getDegree(): ?string
    {
        return $this->degree;
    }

    public function setDegree(string $degree): void
    {
        $this->degree = $degree;
    }

    public function getBio(): ?string
    {
        return $this->bio;
    }

    public function setBio(string $bio): void
    {
        $this->bio = $bio;
    }

    public function show(): void
    {
        echo "Instrutor: #{$this->getId()} - Nome: {$this->getName()}<br>";
        echo "Email: {$this->getEmail()}<br>";
        echo "Formação: {$this->degree}<br>";
        echo "Bio: {$this->bio}<br>";
    }
}

