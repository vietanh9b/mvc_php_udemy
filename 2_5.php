<?php
class User{
    private $name;
    private $age;

    public function __construct($name,$age)
    {
        $this->name=$name;
        $this->age=$age;
    }

    public function __set($property, $value)
    {
        if(property_exists($this,$property)){
            $this->$property=$value;
        }
    }

    public function __get($property)
    {
//        property_exists checks whether an object or class has a certain property or method
//        return bool
    if(property_exists($this,$property)){
        return $this->$property;
    }
    }
}

$user1= new User('Việt Anh',20);
$user1->__set('name','Việt Nam');
echo $user1->__get('name');

