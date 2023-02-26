<?php

require_once ('../vendor/autoload.php');

$worker = new \App\Worker("Alex", 25, [10,20,30]);
$worker->work();


$developer = new \App\Developer("John", 30, [10, 15]);
$developer->setSalary('$2500');
var_dump($developer->getSalary());
$developer->work();
