<?php

namespace source\Models\Company;

use source\Models\User;

class Employee extends User
{
    protected ?float $hoursWorked;
    protected ?float $hourValue;

    public function __construct(int $id = null, string $name = null,string $email = null,string $password = null,string $photo = null, float $hoursWorked, float $hourValue)
    {
        parent::__construct($id, $name, $email, $password, $photo);
        $this->hoursWorked = $hoursWorked;
        $this->hourValue = $hourValue;
    }

    public function getHoursWorked(): ?float
    {
        return $this->hoursWorked;
    }

    public function setHoursWorked(float $hoursWorked): void
    {
        $this->hoursWorked = $hoursWorked;
    }

    public function getHourValue(): ?float
    {
        return $this->hourValue;
    }

    public function setHourValue(float $hourValue): void
    {
        $this->hourValue = $hourValue;
    }

    protected function calculateSalary(): float
    {
        return $this->hoursWorked * $this->hourValue;
    }

    public function show(): void
    {
        $salary = number_format($this->calculateSalary(),2, ",",".");
        echo "Funcionário: {$this->getId()} - Nome: {$this->getName()} <br>
              Email: {$this->getEmail()} <br>
              Horas Trabalhadas: {$this->hoursWorked} <br>
              Valor da Hora: R$ {$this->hourValue} <br>
              Salário: R$ {$salary} <br>";
    }

}