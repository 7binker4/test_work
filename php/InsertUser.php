<?php

require_once "Connection.php";


$login = $_REQUEST['login'];
$surname = $_REQUEST['surname'];
$name = $_REQUEST['name'];
$password = md5($_REQUEST['password']);
$email = $_REQUEST['email'];

$sql = "INSERT INTO user(login, surname, name, password, email) value " .
    "('$login', '$surname', '$name', '$password', '$email')";
$query = mysqli_query($link, $sql) or die("error insert");

mysqli_close($link);

?>

<HTML>
<HEAD>
    <META HTTP-EQUIV='Refresh' CONTENT='0; URL=index.php'>
</HEAD>