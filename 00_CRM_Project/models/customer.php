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
        return array_sum(array_column($this->items, $key));
    }
}

class Customer
{
    public $customerId; 
    public $emailAddress;
    public $firstName;
    public $lastName;

    public function __construct($customerId, $emailAddress, $firstName, $lastName)
    {
        $this->customerId = $customerId;
        $this->emailAddress = $emailAddress;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function retrieve(){
        // Todo: retrieve all customers from an array.
    }

    public function save(){
        // just returning true for now.
        return true; 
    }
}