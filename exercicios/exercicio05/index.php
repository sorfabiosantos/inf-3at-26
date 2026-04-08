<?php

require_once __DIR__ . '/../../source/autoload.php';

use source\Models\Hospital\Patient;
use source\Models\Hospital\Doctor;

echo "Exercício 05 – Herança: Patient e Doctor (namespace Hospital)" . "<br>";
echo "==============================================================" . "<br><br>";

// -----------------------------------------------------------------------
// Pacientes (Patients)
// -----------------------------------------------------------------------

$p1 = new Patient(
    1,
    "Ana Lima",
    "ana@hospital.com",
    "senha123",
    "14/05/1990",
    "Paciente com histórico de hipertensão arterial. Acompanhamento mensal."
);

$p2 = new Patient(
    2,
    "Bruno Ferreira",
    "bruno@hospital.com",
    "senha456",
    "22/11/1985",
    "Diabético tipo 2. Controle glicêmico trimestral."
);

// Usando setters para atualizar dados após a criação
$p2->setEmail("bruno.ferreira@hospital.com");
$p2->setMedicalRecord("Diabético tipo 2. Controle glicêmico trimestral. Adicionado acompanhamento nutricional.");

// -----------------------------------------------------------------------
// Médicos (Doctors)
// -----------------------------------------------------------------------

$d1 = new Doctor(
    1,
    "Carlos Mendes",
    "carlos@hospital.com",
    "senha789",
    "CRM/SP 123456",
    "Cardiologista"
);

$d2 = new Doctor(
    2,
    "Maria Santos",
    "maria@hospital.com",
    "senhaabc",
    "CRM/RJ 654321",
    "Clínico Geral"
);

// Usando setters para atualizar especialidade
$d2->setSpecialty("Pediatra");

// -----------------------------------------------------------------------
// Exibição dos pacientes
// -----------------------------------------------------------------------

echo "=== Pacientes ===" . "<br>";
echo $p1->show() . "<br><br>";
echo $p2->show() . "<br><br>";

// -----------------------------------------------------------------------
// Exibição dos médicos
// -----------------------------------------------------------------------

echo "=== Médicos ===" . "<br>";
echo $d1->show() . "<br><br>";
echo $d2->show() . "<br><br>";

// -----------------------------------------------------------------------
// Consultando atributos com getters
// -----------------------------------------------------------------------

echo "=== Consultas com Getters ===" . "<br>";
echo "Paciente 1 - Data de Nascimento: " . $p1->getBirthDate() . "<br>";
echo "Médico 1 - CRM: " . $d1->getCrm() . "<br>";
echo "Médico 2 - Especialidade atualizada: " . $d2->getSpecialty() . "<br>";

