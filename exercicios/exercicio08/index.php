<?php

use source\Models\Company\Employee;
use source\Models\Company\Seller;

require __DIR__ . "/../../source/autoload.php";

$employee = new Employee(
    23,
    "Fábio Santos",
    "fabiosantos@ifsul.edu.br",
    "123456",
    "/storage/photos/",
    24,
    300
);

var_dump($employee);
$employee->show();

$saller = new Seller(
    23,
    "Fábio Santos",
    "fabiosantos@ifsul.edu.br",
    "123456",
    "/storage/photos/",
    24,
    300,
    5000
);
var_dump($saller);
$saller->show();