<?php
// inheritance
class User{
    protected $name;
    protected $age;

    public function __construct($name,$age)
    {
        $this->name=$name;
        $this->age=$age;
    }
}

class Customer extends User{

    public function __construct($name,$age)
    {
        parent::__construct($name,$age);
    }

    function getInfo(){
        return "My name is ".$this->name;
    }
}

$customer1= new Customer('Brad',20);
echo $customer1->getInfo();