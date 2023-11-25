<?php
// include '../connection.php';
if(!isset($_COOKIE['username'])){
    header('Location: ../users/login.php');
}

$query = "SELECT * FROM tbpelanggan";
        
$datas = mysqli_query($connection, $query);


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>

    <section class="bg-gray-50 dark:bg-green-200 p-3 sm:p-5 h-full">
   <center class="h-full relative">
    <h2 class=" text-[4rem] absolute left-[50%] top-[50%] translate-x-[-50%] translate-y-[-50%]">Selamat Datang <?php if($_COOKIE['levelUser'] == "admin"){echo "Admin";} else{echo "Karyawan";} ?></h2>
   </center>
    </section>
        <script src="" async defer></script>
    </body>
</html>