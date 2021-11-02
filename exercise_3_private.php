<?php

declare(strict_types=1);

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

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor($color): string
    {
        return $this->color=$color;
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

    private function beerInfo(): string
    {
        return "Hi, I'm " . $this->name . " and have an alcohol percentage of " . $this->alcoholpercentage . " and I have a " . $this->getColor() . " color.\n";
    }

    public function showInfo()
    {
        echo $this->beerInfo();
    }
}

$duvel = new beer("Duvel", 8.5, "blonde", 3.5, "cold");

echo $duvel->getAlcoholpercentage() . "\n";
print $duvel->getAlcoholpercentage() . "\n";
print $duvel->getColor() . "\n";
echo $duvel->getInfo(). "\n";

$duvel->setColor("light");
echo $duvel->getColor() . "\n";

$duvel->showInfo();
/* EXERCISE 3
Copy the code of exercise 2 to here and delete everything related to cola.
Make all properties private.
Make all the other prints work without error.
After fixing the errors. Change the color of Duvel to light instead of blond and
also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alochol percentage of 8.5 and I have a light color."
Make sure that you use the variables and not just this text line.
Print this method on the screen on a new line.
USE TYPEHINTING EVERYWHERE!
*/