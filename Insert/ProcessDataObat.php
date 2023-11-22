<?php

include '../../connection.php';
session_start();
// if(!isset($_SESSION['username'])){
//     header('Location: ../../users/login.php');
// }

if(!isset($_COOKIE['username'])){
    header('Location: ../users/login.php');
}
$idSupplier = $_POST['idSupplier'];
$namaObat = $_POST['namaObat'];
$kategoriObat = $_POST['kategoriObat'];
$hargaJual = $_POST['hargaJual'];
$hargaBeli = $_POST['hargaBeli'];
$stokObat = $_POST['stokObat'];
$keteranganObat = $_POST['keteranganObat'];


// $query = "INSERT INTO tbobat('idObat','idSupplier','namaObat','kategoriObat','hargaJual','hargaBeli','stokObat','keterangan') VALUES('$idObat','$idSupplier','$namaObat','$kategoriObat','$hargaJual','$hargaBeli','$stokObat','$keteranganObat')";
$query = "INSERT INTO tbobat VALUES('','$idSupplier','$namaObat','$kategoriObat','$hargaJual','$hargaBeli','$stokObat','$keteranganObat')";
// $queryDuplicate = "SELECT idObat FROM tbobat WHERE idObat = '$idObat'";

if(mysqli_query($connection, $query)){
 echo ' <h1 class="text-xl font-bold ml-auto mr-auto"> INPUTED DATA </h1> ';
 header("Location:../../Views/tampilDataObat.php");
 exit;
}
?>
