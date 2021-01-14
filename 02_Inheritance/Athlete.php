<?php

class Collection
{
    protected array $items;

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function sum($key)
    {
        return array_sum(array_map(function($item) use ($key){
            return $item->$key;
        }, $this->items));
    }
}

class AthleteCollection extends Collection
{
    public function win()
    {
        return $this->sum('win');
    }
}

class Athlete
{
    public $name;
    public $win;

    public function __construct($name, $win)
    {
        $this->name = $name;
        $this->win = $win;
    }
}

$athletes = new AthleteCollection([
    new Athlete('Curtis Blaydes', 25),
    new Athlete('Neil Magny', 26),
    new Athlete('Allistar Overeem', 35)
]);

var_dump($athletes);

echo $athletes->win();
// echo "sum of wins " . $collection->sum('win');