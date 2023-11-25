<?php

include '../connection.php';
if(!isset($_COOKIE['username'])){
    header('Location: ../users/login.php');
}
$namaKaryawan = mysqli_real_escape_string($connection, $_POST['namaKaryawan']);
$nomorKaryawan = mysqli_real_escape_string($connection, $_POST['nomorKaryawan']);
$alamatKaryawan = mysqli_real_escape_string($connection, $_POST['alamatKaryawan']);


$query = "INSERT INTO tbkaryawan VALUES(NULL,'$namaKaryawan','$alamatKaryawan','$nomorKaryawan')";

if(mysqli_query($connection, $query)){
 echo ' <h1 class="text-xl font-bold ml-auto mr-auto"> INPUTED DATA </h1> ';
 header("refresh:3,url=../dashboard.php?page=karyawan");
 exit;
}
?>
