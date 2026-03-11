<?php

require __DIR__ . "/../../source/autoload.php";

use source\Models\Course\Instructor;
use source\Models\Course\Course;

// Criando instrutores
$instructor1 = new Instructor(
    1,
    "Ana Paula Silva",
    "ana.silva@plataforma.com",
    "senha123",
    "Mestre em Ciência da Computação",
    "Desenvolvedora há 10 anos, apaixonada por PHP e arquitetura de software."
);

$instructor2 = new Instructor(
    2,
    "Carlos Eduardo Santos",
    "carlos.santos@plataforma.com",
    "senha456",
    "Doutor em Engenharia de Software",
    "Professor universitário e consultor em projetos de grande porte."
);

// Exibindo instrutores
echo "<h2>== Instrutores ==</h2>";
$instructor1->show();
echo "<hr>";
$instructor2->show();
echo "<hr>";

// Usando getters e setters para alterar dados
$instructor1->setDegree("Doutora em Ciência da Computação");
$instructor1->setBio("Pesquisadora e desenvolvedora há 12 anos, especialista em PHP e padrões de projeto.");

echo "<h2>== Instrutor 1 Atualizado ==</h2>";
$instructor1->show();
echo "<hr>";

// Criando cursos vinculados aos instrutores
$course1 = new Course(
    1,
    "PHP Orientado a Objetos",
    40,
    $instructor1
);

$course2 = new Course(
    2,
    "Arquitetura de Software com Laravel",
    60,
    $instructor2
);

// Exibindo cursos
echo "<h2>== Cursos ==</h2>";
$course1->show();
echo "<hr>";
$course2->show();
echo "<hr>";

// Usando getters e setters para alterar dados do curso
$course1->setTitle("PHP OO Avançado");
$course1->setHours(50);

echo "<h2>== Curso 1 Atualizado ==</h2>";
$course1->show();
echo "<hr>";

// Consultando dados via getters
echo "<h2>== Consultas via Getters ==</h2>";
echo "Instrutor do Curso 2: " . $course2->getInstructor()->getName() . "<br>";
echo "Formação: " . $course2->getInstructor()->getDegree() . "<br>";
echo "Carga horária do Curso 1: " . $course1->getHours() . "h<br>";

