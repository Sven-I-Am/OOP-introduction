<?php

declare(strict_types=1);

use beverage as GlobalBeverage;

class beverage 
{
    private string $color;
    private float $price;
    private string $temperature = "cold";

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
/* EXERCISE 6
Copy the classes of exercise 2.
change the properties to private.
Make a const barname with the value 'Het Vervolg'.
print the constant on the screen
create a function in beverage and use the constant.
Do the same in the beer class
print the output of these functions on the screen.
Make sure that every print is on a new line.
Use typehinting everywhere!
*/