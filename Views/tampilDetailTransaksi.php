<?php
// include '../connection.php';
if(!isset($_COOKIE['username'])){
    header('Location: ../users/login.php');
}

$query = "SELECT * FROM tbsupplier";
        
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

    <section class="bg-gray-50 dark:bg-green-200 p-3 sm:p-5 h-full min-h-screen">
    <div class="mx-auto max-w-[700px] px-4 lg:px-12">
        <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
           
                
                    
                <table class=" text-sm text-left text-gray-500 dark:text-gray-400 w-full">
                
                    <tbody>
                        <tr class="border-b dark:border-gray-500">
                            <th scope="row" class=" dark:bg-gray-700 px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">ID Transaksi</th>
                            <td class="px-4 py-3 "></td>
                        </tr>
                        <tr class="border-b dark:border-gray-500">
                            <th scope="row" class=" dark:bg-gray-700 px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">Tanggal Transaksi</th>
                            <td class="px-4 py-3 ">Tanggal Transaksi</td>
                        </tr>
                        <tr class="border-b dark:border-gray-500">
                            <th scope="row" class=" dark:bg-gray-700 px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">Pelanggan</th>
                            <td class="px-4 py-3 ">Pelanggan</td>
                        </tr>
                        <tr class="border-b dark:border-gray-500">
                            <th scope="row" class=" dark:bg-gray-700 px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">Kategori Pelanggan</th>
                            <td class="px-4 py-3 ">Kategori Pelanggan</td>
                        </tr>
                        <tr class="border-b dark:border-gray-500">
                            <th scope="row" class=" dark:bg-gray-700 px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">Nama Karyawan</th>
                            <td class="px-4 py-3 ">Nama Karyawan</td>
                        </tr>


                    </tbody>
                </table>
                <div>
                    
                </div>
                
        </div>
    </div>
    </section>
        <script src="" async defer></script>
    </body>
</html>