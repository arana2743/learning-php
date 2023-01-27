<?php
// From PHP v5 onwars we can write code in either procedural or object oriented way
/*
Access modifies:
public - can be accessed from anywhere
private - can be accessed from inside the class
protected - can only be accessed from inside the class and by inheriting class
*/
class User {
    public $name;
    public $email;
    public $password;

    // creating the constructor

    public function __construct($name, $email, $password) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    function set_name($name) {
        $this->name = $name;
    }
    function get_name() {
        return $this->name;
    }
}

// Object intantiation 
$user1 = new User('Frank', 'frank@gmail.com', 'test');
var_dump($user1);

$user1->set_name('Brock');
echo '<br>' . $user1->get_name();

// Inhertiance
class Employee extends User {
    public $title;

    public function __construct($name, $email, $password, $title) {
        // calling parent class constructor
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }

    function get_title() {
        return $this->title;
    }
}

$emp1 = new Employee('Sandy', 'sandy@gmail.com', '1234', 'worker');
echo '<br>' . $emp1->get_title();

?>