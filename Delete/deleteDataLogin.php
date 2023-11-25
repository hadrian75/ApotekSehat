<?php
if(!isset($_COOKIE['username'])){
    header('Location: ../users/login.php');
}


// include '../connection.php';
$id = $_GET['id'];

$query = "DELETE FROM tbobat WHERE idObat = '$id'";
mysqli_query($connection, $query);

if($query){
header('refresh:2;../Views/tampilDataObat.php');
}
else{
    echo "<h1 class='text-2xl font-bold text-red-500' > DELETE FAILED </h1>";
}