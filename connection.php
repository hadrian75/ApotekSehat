<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'dbapotek';

$connection = new mysqli($host, $user, $password, $database);

if(!$connection){
    die("Connection failed:" .mysqli_connect_error());
}

?>  