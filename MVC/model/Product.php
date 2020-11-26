<?php

namespace connected;


class Product
{
    public $id;
    public $name;
    public $category;
    public $price;
    public $amount;
    public $date;
    public $description;

    public function __construct($name, $category, $price, $amount, $date, $description)
    {
        $this->name = $name;
        $this->category = $category;
        $this->price = $price;
        $this->amount = $amount;
        $this->date = $date;
        $this->description = $description;
    }

}
