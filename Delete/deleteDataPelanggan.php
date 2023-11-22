<?php
if(!isset($_COOKIE['username'])){
    header('Location: ../users/login.php');
}


include '../connection.php';

$id = $_GET['id'];

$queryFotoResep = "SELECT buktiFotoResep FROM tbpelanggan WHERE idpelanggan = '$id'";
$executeFotoResep = mysqli_query($connection, $queryFotoResep);
$fetchFotoResep = mysqli_fetch_assoc($executeFotoResep);
$fileFotoResep = $fetchFotoResep['buktiFotoResep'];
$pathFolder = "../img/resep/";
$fullPath = $pathFolder . $fileFotoResep;
$query = "DELETE FROM tbpelanggan WHERE idPelanggan = '$id'";
$delete = mysqli_query($connection, $query);

if(file_exists($fullPath)){
if(
    $delete
){
unlink($fullPath);
header("Location:../index.php");
 }
    else{
        echo "Cannot Data";
    }
}
else{
    echo " File Doesn't Exist";
}