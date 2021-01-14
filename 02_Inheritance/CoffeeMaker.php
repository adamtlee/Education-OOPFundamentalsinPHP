<?php

class CoffeeMaker
{
    public function brew()
    {
        var_dump('Brewing coffee');
    }
}

(new CoffeeMaker())->brew();