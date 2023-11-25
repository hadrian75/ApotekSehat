<?php

include '../../connection.php';

$namaPelanggan = $_POST['namaPelanggan'];
$alamat = $_POST['alamatPelanggan'];
$nomorTelepon = $_POST['nomorPelanggan'];
$usia = $_POST['usia'];
$buktiFoto = $_FILES['buktiFoto']['name'];
$buktiFotoTmp = $_FILES['buktiFoto']['tmp_name'];

$extension = pathinfo($buktiFoto, PATHINFO_EXTENSION);
            $lowerExtension = strtolower($extension);
            $newBuktiFoto = uniqid("bukti-", true).'.'.$lowerExtension;
            $uploadFotoBukti = '../../img/resep/'.$newBuktiFoto;
            move_uploaded_file($buktiFotoTmp, $uploadFotoBukti);
            $query = "INSERT INTO tbPelanggan VALUES('','$namaPelanggan', '$alamat','$nomorTelepon','$usia','$newBuktiFoto')";
            if(mysqli_query($connection,  $query)){
             echo ' <h1 class="text-xl font-bold ml-auto mr-auto"> INPUTED DATA </h1> ';
             header("refresh:3,url=../dashboard.php?page=pelanggan");
             exit;
            }

?>
