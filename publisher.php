<?php
class Publisher {
    public $name;
    public $address;
    private $phone;

    public function __construct($name, $address, $phone) 
    {
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
    }

    public function setPhone($phone) 
    {
        $this->phone = $phone;
    }

    public function getPhone() 
    {
        return $this->phone;
    }

}