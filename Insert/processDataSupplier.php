<?php 
include "../connection.php";

$idSupplier = mysqli_real_escape_string($connection, $_POST['idSupplier']);
$namaPerusahaan = mysqli_real_escape_string($connection, $_POST['namaPerusahaan']);
$alamatSupplier = mysqli_real_escape_string($connection, $_POST['alamatSupplier']);
$nomorSupplier = mysqli_real_escape_string($connection, $_POST['nomorSupplier']);
$keteranganSupplier = mysqli_real_escape_string($connection, $_POST['keteranganSupplier']);

$query = "INSERT INTO tbsupplier (idSupplier, perusahaan, telp, alamat, keterangan) VALUES ('$idSupplier', '$namaPerusahaan',  '$nomorSupplier', '$alamatSupplier', '$keteranganSupplier')";
mysqli_query($connection, $query);
header("Location: ../dashboard.php?page=supplier");
exit;