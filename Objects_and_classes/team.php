<?php

class Team
{
    protected $name;
    protected $members = [];

    public function __construct($name, $members = [])
    {
        $this->name = $name;
        $this->members = $members;
    }

    public static function start(...$params)
    {
        var_dump($params);
        return new static(...$params);
    }
    
    public function name()
    {
        return $this->name;
    }

    public function members()
    {
        return $this->members;
    }

    public function add($name)
    {
        $this->members[] = $name;

    }

    public function cancel()
    {

    }
}

class Member
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function lastViewed()
    {

    }
}

$elevate = Team::start('Elevate', [
    new Member('Curtis Blaydes'),
    new Member('Neil Magny')
]);

/*
$elevate = new Team('Elevate',[
    'Curtis Blaydes',
    'Neil Magny'
]);

$elevate->add('Corey Sandhagen');
// $elevate->add('Neil Magny');

var_dump($elevate);
var_dump($elevate->name());
*/

var_dump($elevate->members());