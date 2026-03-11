<?php

namespace source\Models\Course;

class Course
{
    private $id;
    private $title;
    private $hours;
    private $instructor;

    public function __construct(
        int $id = null,
        string $title = null,
        int $hours = null,
        Instructor $instructor = null
    )
    {
        $this->id = $id;
        $this->title = $title;
        $this->hours = $hours;
        $this->instructor = $instructor;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getHours(): ?int
    {
        return $this->hours;
    }

    public function setHours(int $hours): void
    {
        $this->hours = $hours;
    }

    public function getInstructor(): ?Instructor
    {
        return $this->instructor;
    }

    public function setInstructor(Instructor $instructor): void
    {
        $this->instructor = $instructor;
    }

    public function show(): void
    {
        echo "Curso: #{$this->id} - Título: {$this->title}<br>";
        echo "Carga Horária: {$this->hours}h<br>";
        echo "Instrutor: {$this->instructor->getName()}<br>";
    }
}

