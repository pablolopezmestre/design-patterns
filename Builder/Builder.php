<?php

/**
 * Es especialmente útil cuando debes crear un objeto con muchas opciones posibles de configuración, para evitar
 * enviar al constructor una serie de parámetros que no sean necesarios.
 */
interface InsuranceInterface
{
    public function setGender(string $gender);

    public function setAge(int $age);

    public function getPrice();
}

class LifeInsurance implements InsuranceInterface
{
    public $gender;
    public $age;
    public $health;

    public function setGender(string $gender): void
    {
        $this->gender = $gender;
    }

    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function calcHealth(): void
    {
        // Calculate health
        $this->health = $health;
    }

    public function getPrice(): float
    {
        // Calculate and return price
        $price = 0;

        return $price;
    }
}

class AutomobileInsurance implements InsuranceInterface
{
    public $gender;
    public $age;
    public $experience;

    public function setGender(string $gender): void
    {
        $this->gender = $gender;
    }

    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function calcExperience(): void
    {
        // Calculate experience
        $this->experience = $experience;
    }

    public function getPrice(): float
    {
        // Calculate and return price
        $price = 0;

        return $price;
    }
}

echo (new LifeInsurance())->setGender('female')->setAge(42)->getPrice();
echo (new AutomobileInsurance())->setGender('male')->setAge(41)->getPrice();
