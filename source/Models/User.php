<?php

namespace source\Models;

class User
{
    private ?int $id;
    private ?string $name;
    private ?string $email;
    private ?string $password;
    private ?string $photo;

    public function __construct(int $id = null, string $name = null, string $email = null, string $password = null, string $photo = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->photo = $photo;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name = null): void
    {
        $this->name = $name;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email = null): void
    {
        $this->email = $email;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password = null): void
    {
        $this->password = $password;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo = null): void
    {
        $this->photo = $photo;
    }

    public function show(): string
    {
        return "Usuário: #{$this->id} - Nome: {$this->name} - Email: {$this->email}";
    }
}

