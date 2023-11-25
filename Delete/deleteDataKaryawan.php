<?php
include '../connection.php';

if(!isset($_COOKIE['username'])){
    header('Location: ../users/login.php');
}


$id = $_GET['id'];

$query = "DELETE FROM tbkaryawan WHERE idKaryawan = '$id'";
mysqli_query($connection, $query);

if($query){
header('refresh:2;dashboard.php?page=karyawan');
}
else{
    echo "<h1 class='text-2xl font-bold text-red-500' > DELETE FAILED </h1>";
}