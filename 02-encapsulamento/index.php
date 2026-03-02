<?php

class User
{
    private $name;
    private $email;
    public function __construct(
        string $name = null,
        string $email = null)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name = null): void
    {
        $this->name = $name;
    }
}

$user = new User("Fábio Santos", "fabiosantos@gmail.com");
var_dump($user);
$user->setName();
echo "Olá, {$user->getName()}!";
/*
$user = new User(email:"jonh@gmail.com", name:"Jonh Santos");
var_dump($user);
$user = new User(email:"jonh@gmail.com");
var_dump($user);
*/