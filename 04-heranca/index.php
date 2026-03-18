<?php

use source\Models\Game\Warrior;

class Client
{
    protected $name;
    protected $email;

    public function __construct(string $name = null, string $email = null)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

}

class Company extends Warrior
{
    private $cnpj;

    public function __construct(string $name = null, string $email = null, string $cnpj = null)
    {
        parent::__construct($name, $email);
        $this->cnpj = $cnpj;
    }

    public function getCnpj(): ?string
    {
        return $this->cnpj;
    }

    public function setCnpj(?string $cnpj): void
    {
        $this->cnpj = $cnpj;
    }

    public function show(): void
    {
        echo "Nome {$this->name} - Email {$this->email} - CNPJ {$this->cnpj}";
    }
}

class Person extends Client
{
    private $cpf;

    public function __construct(string $name = null, string $email = null, string $cpf = null)
    {
        parent::__construct($name, $email);
        $this->cpf = $cpf;
    }

    public function getCpf(): ?string
    {
        return $this->cpf;
    }

    public function setCpf(?string $cpf): void
    {
        $this->cpf = $cpf;
    }

    public function show(): void
    {
        echo "Nome {$this->name} - Email {$this->email} - CPF {$this->cpf}";
    }
}