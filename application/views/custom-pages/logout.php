<?php 
session_start();
// $id = $_SESSION['id'];
// $name = $_SESSION['name'];
unset($_SESSION['id']);
unset($_SESSION['name']);
session_destroy(); 
header("Location: pages/login.html");