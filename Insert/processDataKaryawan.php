<?php

include '../../connection.php';
session_start();
if(!isset($_COOKIE['username'])){
    header('Location: ../../users/login.php');
}
$namaKaryawan = $_POST['namaKaryawan'];
$nomorKaryawan = $_POST['nomorKaryawan'];
$alamatKaryawan = $_POST['alamatKaryawan'];



// $query = "INSERT INTO tbobat('idObat','idSupplier','namaObat','kategoriObat','hargaJual','hargaBeli','stokObat','keterangan') VALUES('$idObat','$idSupplier','$namaObat','$kategoriObat','$hargaJual','$hargaBeli','$stokObat','$keteranganObat')";
$query = "INSERT INTO tbobat VALUES('','$namaKaryawan', '$nomorKaryawan','$alamatKaryawan')";
// $queryDuplicate = "SELECT idObat FROM tbobat WHERE idObat = '$idObat'";

if(mysqli_query($connection, $query)){
 echo ' <h1 class="text-xl font-bold ml-auto mr-auto"> INPUTED DATA </h1> ';
 header("Location:../../Views/tampilDataKaryawan.php");
 exit;
}
?>
