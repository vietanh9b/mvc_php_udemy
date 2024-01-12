<?php
class User {
    public $name;
    public $age;

//    run when an object is created (magic constant)
    public function __construct($name,$age)
    {
        echo 'CLASS '.__CLASS__.' instantiated<br>';
        $this->name=$name;
        $this->age=$age;
    }

    public function sayHello(){
        return $this->name.' Says Hello';
    }

//    called when no other references to a certain object (magic constant)
//      Used for cleanup, closing connection, ect
    public function __destruct()
    {
        echo 'destructor ran...';
        // TODO: Implement __destruct() method.
    }
}

$user1 = new User('Brad',36);
echo $user1->age.' is '.$user1->name.' years old';
echo '<br>';
echo $user1->sayHello();
echo '<br>';

// other user

$user2 = new User('Sara',25);
echo $user2->age.' is '.$user2->name.' years old';
echo '<br>';
echo $user2->sayHello();
