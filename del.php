<?php
session_start();
$id = $_GET['id'];

array_splice($_SESSION['student'], $id, 1);

return header("location:index.php");
