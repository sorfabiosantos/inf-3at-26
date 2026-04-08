<?php

namespace source\Models\Hospital;

use source\Models\User;

class Patient extends User
{
    private string $birthDate;
    private string $medicalRecord;

    public function __construct(
        int    $id,
        string $name,
        string $email,
        string $password,
        string $birthDate,
        string $medicalRecord,
        string $photo = null
    )
    {
        parent::__construct($id, $name, $email, $password, $photo);
        $this->birthDate = $birthDate;
        $this->medicalRecord = $medicalRecord;
    }

    // --- Getters ---

    public function getBirthDate(): string
    {
        return $this->birthDate;
    }

    public function getMedicalRecord(): string
    {
        return $this->medicalRecord;
    }

    // --- Setters ---

    public function setBirthDate(string $birthDate): void
    {
        $this->birthDate = $birthDate;
    }

    public function setMedicalRecord(string $medicalRecord): void
    {
        $this->medicalRecord = $medicalRecord;
    }

    // --- Exibição ---

    public function show(): string
    {
        return "Paciente: #{$this->getId()} - Nome: {$this->getName()}<br>" .
            "Email: {$this->getEmail()}<br>" .
            "Data de Nascimento: {$this->birthDate}<br>" .
            "Prontuário: {$this->medicalRecord}";
    }
}

