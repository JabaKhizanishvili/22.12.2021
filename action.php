<?php
session_start();

$obj = [
    "name" => $_POST['fname'],
    "surname" => $_POST['lname'],
    "age" => $_POST['age'],
    "point" => $_POST['point'],
];

if (!isset($_SESSION['student'])) $_SESSION['student'] = array();


array_push($_SESSION['student'], $obj);


return header("location:index.php");
