<?php
include 'connection.php';
session_start();

if(!isset($_COOKIE['username'])){
    header('Location: users/login.php');
}
else{
    header('Location: Views/tampilDataObat.php');
}
