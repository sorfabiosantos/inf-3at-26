<?php

namespace source\Models;

class Product
{
    private $id;
    private $name;
    private $price;

    public function __construct(
        int $id = null,
        string $name = null,
        float $price = null
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function getId (): ?int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getName (): ?string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getPrice (): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function discount (float $discount): void
    {
        $this->price = $this->price - ($discount / 100 * $this->price);
        //$this->price -= ($discount / 100 * $this->price);
    }

    public function show(): void
    {
        $formatPrice = number_format(
            $this->price,
            2,
            ',',
            '.');
        echo "<h1>Nome: {$this->name} - Preço: R$ {$formatPrice}</h1>";
    }
}