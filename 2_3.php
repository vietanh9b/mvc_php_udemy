<?php
// define a class
class User {
//    Properties (attributes)
    public $name='Brad';
//    Methods
    public function sayHello(){
        return $this->name.' Says '.'Hello';
    }
}

// Instatiate a user object from the user class
$user1= new User();
echo $user1->name;
echo $user1->sayHello();

// create new user
$user2= new User();
echo $user2->name;
echo $user2->sayHello();