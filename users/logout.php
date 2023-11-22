<?php
include '../connection.php';
// session_start();
// session_destroy();

//Cookies
setcookie('username', '', time() - 3600, '/'); // Set to the past (1 hour ago)
setcookie('levelUser', '', time() - 3600, '/'); // Set to the past (1 hour ago)
header('Location:login.php');
