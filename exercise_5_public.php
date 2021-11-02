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

    public function setPrice($price): float
    {
        return $this->price=$price;
    }
}

$cola = new beverage("black", 2.00, "cold");
$colaR = new ReflectionClass ("beverage");
$temperature = $colaR->getProperty("temperature");
$temperature->setAccessible(true);
echo $cola->getinfo() . "\n";
echo $temperature->getValue($cola) . "\n";

$cola->setPrice(3.5);
$price = $colaR->getProperty("price");
$price->setAccessible(true);

echo $price->getValue($cola);

/* EXERCISE 5
Copy the class of exercise 1.
change the properties to private.
fix the errors without using getter and setter functions.
change the price to 3.5 euro and print it also on the screen on a new line.
*/