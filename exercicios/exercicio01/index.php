<?php

require __DIR__ . "/../../source/autoload.php";
//require __DIR__. "/../../source/Models/User.php";
//require __DIR__. "/../../source/Models/Product.php";

use source\Models\Product;
use source\Models\User;

$product = new Product(2, "Computador", 10000);
$user = new User();
var_dump($product);
$product->discount(10);
var_dump($product);
$product->show();
var_dump($user);