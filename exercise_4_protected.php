<?php

declare(strict_types=1);

class beverage 
{
    protected string $color;
    protected float $price;
    protected string $temperature = "cold";

    public function __construct(string $color, float $price, string $temperature)
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo(): string
    {
        return "This beverage is " . $this->temperature . " and " . $this->color . ".";
    }

}

class beer extends beverage
{
    protected string $name;
    protected float $alcoholpercentage;

    public function __construct(string $name, float $alcoholpercentage, string $color, float $price, string $temperature)
    {
        parent::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholpercentage = $alcoholpercentage;
    }

    public function getAlcoholpercentage()
    {
        return $this->alcoholpercentage;
    }

    public function getColor(): string
    {
        return $this->color;
    }
}

$duvel = new beer("Duvel", 8.5, "blonde", 3.5, "cold");

echo $duvel->getAlcoholpercentage() . "\n";
print $duvel->getAlcoholpercentage() . "\n";
print $duvel->getColor() . "\n";
echo $duvel->getInfo(). "\n";
/* EXERCISE 4
Copy the code of exercise 2 to here and delete everything related to cola.
Make all properties protected.
Make all the other prints work without error without changing the beverage class.
USE TYPEHINTING EVERYWHERE!
*/