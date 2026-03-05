<?php


require __DIR__ . "/../source/Models/User.php";

//var_dump(__DIR__);

use source\Models\User;

$user = new User("Fábio", "fabio@gmail.com");

var_dump($user);