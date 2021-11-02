<?php

declare(strict_types=1);

use beverage as GlobalBeverage;

class beverage 
{
    private string $color;
    private float $price;
    private string $temperature = "cold";
    static string $adress = "Melkmarkt 9, 2000 Antwerpen";

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

    public function showBar (string $barName)
    {
        return "Welcome to " . $barName . "!\n";
    }
}

class beer extends beverage
{
    private string $name;
    private float $alcoholpercentage;

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

    public function weServe(string $barName): string
    {
        return "Welcome to " . $barName . ", we serve a very nice " . $this->name . ".\n";
    }
}

const barName = "Het Vervolg";
echo barName . "\n";
$duvel = new beer("Duvel", 8.5, "blonde", 3.5, "cold");
echo $duvel->showBar(barName);
echo $duvel->weServe(barName);
echo $duvel::$adress . "\n";
print $duvel::$adress . "\n";
/* EXERCISE 7
Copy your solution from exercise 6
Make a static property in the Beverage class that can only be accessed from inside the class called address
which has the value "Melkmarkt 9, 2000 Antwerpen".
print the address without creating a new instant of the beverage class 2 times in two different ways.
Use typehinting everywhere!
*/