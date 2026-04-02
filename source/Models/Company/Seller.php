<?php

namespace source\Models\Company;

class Seller extends Employee
{
    protected ?float $totalSale;

    public function __construct(
        int $id = null,
        string $name = null,
        string $email = null,
        string $password = null,
        string $photo = null,
        float $hoursWorked,
        float $hourValue,
        float $totalSale
    )
    {
        parent::__construct($id, $name, $email, $password, $photo, $hoursWorked, $hourValue);
        $this->totalSale = $totalSale;
    }

    public function getTotalSale(): ?float
    {
        return $this->totalSale;
    }

    public function setTotalSale(float $totalSale = null): void
    {
        $this->totalSale = $totalSale;
    }

    public function calculateCommission(): float
    {
        return $this->totalSale * 0.1;
    }

    public function calculateSalary(): float
    {
        return parent::calculateSalary() + $this->calculateCommission();
    }

    public function show(): void
    {
        $totalSalary = number_format($this->calculateSalary() + $this->calculateCommission(),2,",",".");
        parent::show();
        echo "Total de Vendas: {$this->totalSale}<br>
              Comissão (10%): R$ {$this->calculateCommission()} <br>
              Salário Total: R$ {$totalSalary} <br>";
    }

}