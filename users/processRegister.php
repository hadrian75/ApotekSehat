<?php
require_once '../connection.php';
@$getId = $_GET['id'];
if(isset($_GET['id']) || @$_GET['id'] != ""){
    mysqli_query($connection, "INSERT INTO tblogin SET username = '$username', pass = '$hashPassword', levelUser = '$levelUser', idKaryawan = $getId");
}
else{
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    @$id = mysqli_query($connection, "SELECT idKaryawan FROM tbkaryawan WHERE namaKaryawan = '$name'");
    $idKaryawan = mysqli_fetch_assoc($id)['idKaryawan'];
    $pass = mysqli_real_escape_string($connection,$_POST['pass']);
    $levelUser = mysqli_real_escape_string($connection,$_POST['leveluser']);
    $hashPassword = password_hash($pass, PASSWORD_DEFAULT);

   if(mysqli_num_rows($id) != 0 ){
    mysqli_query($connection, "INSERT INTO tblogin SET username = '$username', pass = '$hashPassword', levelUser = '$levelUser', idKaryawan = '$idKaryawan'");
    header('Location:../admin/dashboardUsers.php'); 
   }
   else{
    echo '<img src="https://i.pinimg.com/736x/3a/67/19/3a67194f5897030237d83289372cf684.jpg">';
    echo '<img src="https://i.pinimg.com/736x/3a/67/19/3a67194f5897030237d83289372cf684.jpg">';
    header( "Refresh:3; url='register.php'");
   }

}
?>