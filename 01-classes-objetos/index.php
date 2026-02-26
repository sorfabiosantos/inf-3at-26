<?php



class User
{
    public $name;
    public $email;

    public function showUser ()
    {
        echo "Name: {$this->name} - E-mail: {$this->email} ";
    }
}

echo "<h1>Olá, Mundo!</h1>";
$user = new User();
$user->name = "Fábio Santos";
$user->email = "fabiosantos@ifsul.edu.br";
$user->showUser();
var_dump($user);