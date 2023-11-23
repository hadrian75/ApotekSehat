<?php 
include '../connection.php';

if(!isset($_COOKIE['username'])){
    header('Location: ../users/login.php');
}
else{
    if(isset($_COOKIE['username'])){
        if(@$_COOKIE['levelUser'] != "admin"){
            header("../index.php");
        }
    }
}   

$queryKaryawan = "SELECT * FROM tbkaryawan WHERE idKaryawan NOT IN(SELECT idKaryawan FROM tblogin)";
$executeQuery = mysqli_query($connection, $queryKaryawan);

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
    <?php include ('../Component/navbar.php'); ?>
    <section class="bg-gray-50 dark:bg-green-200 p-3 sm:p-5 h-full min-h-screen">
<div class="mx-auto max-w-screen-xl px-4 lg:px-12 rounded-sm py-4 ">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nama Karyawan
                </th>
                <th scope="col" class="px-6 py-3">
                    Nomor HP
                </th>
                <th scope="col" class="px-6 py-3">
                    Alamat
                </th>
                <th scope="col" class="px-6 py-3">
                    Status
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
        <?php
      while($data = mysqli_fetch_assoc($executeQuery)){ ?>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <?= $data['namaKaryawan'] ?>
                </th>
    
                <td class="px-6 py-4">
                <?= $data['telp'] ?>
                </td>
  
                <td class="px-6 py-4">
                <?= $data['alamat'] ?>
                </td>

                <td class="px-6 py-4">
                    <p class="text-red-400">Not Registered</p>
                </td>

                <td class="px-6 py-4">
                    <a href="../users/register.php?id=<?=$data['idKaryawan']?>" class="text-white">
                             <button class="px-4 py-2 w-full  bg-blue-500 rounded-md hover:bg-blue-600">
                             Register
                      </button>
                        </a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    </section>
</div>

    </body>
</html>