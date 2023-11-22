<?php
include '../connection.php';

@$idKaryawan = $_GET['id'];

// if(isset($_SESSION['username'])){
//     if(@$_SESSION['levelUser'] != "admin"){
//         header("../index.php");
//     }
// }

// if(!isset($_COOKIE['username'])){
//     header('Location: ../../users/login.php');
// }
// else{
//     if(isset($_COOKIE['username'])){
//         if(@$_COOKIE['levelUser'] != "admin"){
//             header("../index.php");
//         }
//     }
// }
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <script src="https://cdn.tailwindcss.com"></script>

        
    </head>
    <body class="bg-gray-50 dark:bg-gray-900 w-[100%] fixed">
        <?php include ('../component/navbar.php') ;
        ?>
    
    <!-- <h1 class="font-bold text-4xl my-4 text-center"> REGISTER MENJADI BUDAK KORPORAT TERBAIK</h1> -->
<div class=" flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0 bg-black">
<form class="w-[480px] h-auto flex flex-col dark:border text-white gap-y-5 px-10 py-4 dark:bg-gray-800 dark:border-gray-700  m-auto rounded-md mt-[120px]" action="processRegister.php <?php if(isset($idKaryawan) || $idKaryawan != null) { echo "?id=<?=$idKaryawan?>";}?>" method="POST" enctype="multipart/form-data">
<h2 class="text-center font-semibold text-xl">Form Buat Akun Login</h2>
 
 <div>
<label for="name" class="block mb-1  font-semibold text-32">Name</label>
<input type="text" id="name" name="name" class="block w-full p-2  border border-blue-500 rounded-lg bg-gray-50 sm:text-xs  focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-200 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukan Username">
</div>
 <div>
<label for="userName" class="block mb-1  font-semibold text-32">Username</label>
<input type="text" id="userName" name="username" class="block w-full p-2  border border-blue-500 rounded-lg bg-gray-50 sm:text-xs focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-200 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukan Username">
</div>
 <div>
<label for="passwordUser" class="block mb-1  font-semibold text-32">Password</label>
<input type="password" id="passwordUser" name="pass" class="block w-full p-2  border border-blue-500 rounded-lg bg-gray-50 sm:text-xs focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-200 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukan Password">
 </div>
 <div>
<label for="level" class="block mb-1  font-semibold text-32">Level User</label>
<Select name="leveluser" id="level" class="bg-gray-50 border border-gray-300  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full px-2.5 py-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    <option value="karyawan">Karyawan</option>
    <option value="admin">Admin</option>
</Select>
</div>
<button type="submit" class="bg-gray-700 p-2  text-white rounded-md mt-10 block mx-auto">Kirimkan data</button>
</form>
</div>    
        <script src="" async defer></script>
    </body>
</html>