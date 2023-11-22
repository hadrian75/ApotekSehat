<?php
include '../../connection.php';
session_start();
if(!isset($_COOKIE['username'])){
    header('Location: ../../users/login.php');
}
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset=  "utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <link rel="stylesheet" href="style.css?=<?php echo time() ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
    <?php include ('../../component/navbar.php') ?>

    <h1 class="font-bold text-4xl my-4 text-center"> FORM KARYAWAN SETIA</h1>

       <form class="w-[480px] h-auto flex flex-col bg-green-300 py-6 px-8  rounded-sm m-auto gap-y-1" action="ProcessDataKaryawan.php" method="POST" enctype="multipart/form-data">

        
        <div>
    <label for="small-input" class="block mb-1 text-gray-900 font-light text-32">Nama Karyawan</label>
    <input type="text" id="small-input" name="namaKaryawan" class="block w-full p-2 text-gray-900 border border-blue-500 rounded-lg bg-gray-50 sm:text-xs focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-200 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukan Nama Karyawan">
</div>
        <div>
    <label for="small-input" class="block mb-1 text-gray-900 font-light text-32">Nomor Telepon</label>
    <input type="text" id="small-input" name="nomorKaryawan" class="block w-full p-2 text-gray-900 border border-blue-500 rounded-lg bg-gray-50 sm:text-xs focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-200 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukan Nomor Telepon Karyawan">
        </div>
        <div>
    <label for="small-input" class="block mb-1 text-gray-900 font-light text-32">Alamat</label>
    <textarea rows="4" id="small-input" name="alamatKaryawan" class="block w-full p-2 text-gray-900 border border-blue-500 rounded-lg bg-gray-50 sm:text-xs focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-200 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukan Alamat Karyawan"></textarea>
</div>
<div class="w-full flex justify-center mt-2">
<button class=" text-white w-[40%]  hover:bg-gray-800 bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm  py-2.5 mr-2 mb-2 dark:hover:bg-gray-800 dark:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700" value="">Kirim Data</button>
<a href="Views/tampilDataKaryawan.php" class=" translate-x-1 translate-y-2">List Data</a>
</div>
    </form>
    </body>
</html>