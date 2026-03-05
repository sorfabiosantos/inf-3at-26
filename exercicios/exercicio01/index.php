<?php


require __DIR__ . "/../../source/autoload.php";
//require __DIR__. "/../../source/Models/User.php";
//require __DIR__. "/../../source/Models/Product.php";

use source\Models\Product;
use source\Models\User;

$product = new Product();
$user = new User();
var_dump($product);
var_dump($user);
