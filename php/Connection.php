<?php
$host = 'localhost';
$database = 'tests';
$user = 'root';
$password = 'root';

$link = mysqli_connect('127.0.0.1', 'root', 'root', 'tests', "3306")
or die("!Внимание ошибка подключения!: " . mysqli_error($link));
// echo "Успешное подключение! \n";
?>