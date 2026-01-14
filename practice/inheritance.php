<?php



class user{
    public $name;
    public $email;

    public function __construct($name, $email){
        $this->name = $name;
        $this->email = $email;

    }
    public function displayUser(){
        echo "Name: " . $this->name . "<br>";
        echo "Email: " . $this->email . "<br>";
    }
}


class admin extends user{
    public $age;

    public function __construct($name, $email, $age){
        parent::__construct($name,$email);
        $this->age = $age;
    }
    public function displayAdmin(){
        echo "Name: " . $this->name . "<br>";
        echo "Email: " . $this->email . "<br>";
        echo "Age: " . $this->age . "<br>";
    }
}

$user = new user("John Doe", "user@gmail.com");
$user->displayUser();
echo "<br>";
$admin= new admin("admin", "admin@gmail.com", 23);
$admin->displayAdmin();
echo "<br>";
?>