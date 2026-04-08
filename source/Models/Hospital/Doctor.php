<?php

namespace source\Models\Hospital;

use source\Models\User;

class Doctor extends User
{
    private string $crm;
    private string $specialty;

    public function __construct(
        int    $id,
        string $name,
        string $email,
        string $password,
        string $crm,
        string $specialty,
        string $photo = null
    ) {
        parent::__construct($id, $name, $email, $password, $photo);
        $this->crm       = $crm;
        $this->specialty = $specialty;
    }

    // --- Getters ---

    public function getCrm(): string
    {
        return $this->crm;
    }

    public function getSpecialty(): string
    {
        return $this->specialty;
    }

    // --- Setters ---

    public function setCrm(string $crm): void
    {
        $this->crm = $crm;
    }

    public function setSpecialty(string $specialty): void
    {
        $this->specialty = $specialty;
    }

    // --- Exibição ---

    public function show(): string
    {
        return "Médico: #{$this->getId()} - Nome: {$this->getName()}<br>" .
               "Email: {$this->getEmail()}<br>" .
               "CRM: {$this->crm}<br>" .
               "Especialidade: {$this->specialty}";
    }
}

