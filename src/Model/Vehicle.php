<?php

declare(strict_types=1);

namespace App\Model;

class Vehicle
{
    public function __construct(
        public string $brand,
        public string $model,
        public int    $manufactureYear,
        public string $coupeType,
        public string $fuelType,
        public int    $price
    )
    {
    }

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function setBrand(string $brand): void
    {
        $this->brand = $brand;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function setModel(string $model): void
    {
        $this->model = $model;
    }

    public function getManufactureYear(): int
    {
        return $this->manufactureYear;
    }

    public function setManufactureYear(int $manufactureYear): void
    {
        $this->manufactureYear = $manufactureYear;
    }

    public function getCoupeType(): string
    {
        return $this->coupeType;
    }

    public function setCoupeType(string $coupeType): void
    {
        $this->coupeType = $coupeType;
    }

    public function getFuelType(): string
    {
        return $this->fuelType;
    }

    public function setFuelType(string $fuelType): void
    {
        $this->fuelType = $fuelType;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function setPrice(int $price): void
    {
        $this->price = $price;
    }
}
