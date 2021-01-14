<?php

class CoffeeMaker
{
    public function brew()
    {
        var_dump('Brewing coffee');
    }
}

class SpecialtyCoffeeMaker extends CoffeeMaker
{
    public function brewLatte()
    {
        var_dump('Brewing the latte');
    }
}

(new CoffeeMaker())->brew();

(new SpecialtyCoffeeMaker())->brewLatte();

(new SpecialtyCoffeeMaker())->brew();