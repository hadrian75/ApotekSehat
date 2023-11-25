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
                            <td class="px-4 py-3 ">1</td>
                        </tr>
                        <tr class="border-b dark:border-gray-500">
                            <th scope="row" class=" dark:bg-gray-700 px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">Tanggal Transaksi</th>
                            <td class="px-4 py-3 ">2023-11-25</td>
                        </tr>
                        <tr class="border-b dark:border-gray-500">
                            <th scope="row" class=" dark:bg-gray-700 px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">Pelanggan</th>
                            <td class="px-4 py-3 ">Laal Singh</td>
                        </tr>
                        <tr class="border-b dark:border-gray-500">
                            <th scope="row" class=" dark:bg-gray-700 px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">Kategori Pelanggan</th>
                            <td class="px-4 py-3 ">VIP</td>
                        </tr>
                        <tr class="border-b dark:border-gray-500">
                            <th scope="row" class=" dark:bg-gray-700 px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">Nama Karyawan</th>
                            <td class="px-4 py-3 ">Santika</td>
                        </tr>


                    </tbody>
                </table>
                
                
        </div>
    </div>
    <div class="mx-auto w-2xl px-4 lg:px-12">
           <div class="grid gap-4 sm:grid-cols-5 grid-rows-2 sm:gap-6 px-4 py-5 bg-grey-500">
               <!-- <div class="col-span-1  bg-white dark:bg-gray-800 px-4 py-4 rounded-md">
                  <form action="" method="POST"  >
                    <div class=" h-full w-full rounded-sm">
                        <label for="tombolBayar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah Bayar</label>
                      <input type="number" autocomplete="off" id="tombolBayar" class="bg-gray-50 border border-blue-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-200 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  name="bayar">
                    </div>
                    <input type="submit" name="tombolBayar" class=" inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800" value="Bayar">
                  </form>
               </div> -->
               <div class="col-span-1 row-span-1 bg-white dark:bg-gray-800 px-4 py-4 rounded-md">
                  <form action="" method="POST"  >
                    <div class=" h-full w-full rounded-sm">
                        <label for="inputNamaObat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Obat</label>
                      <input type="text" autocomplete="off" id="inputNamaObat" class="bg-gray-50 border border-blue-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-200 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  name="namaObat">
                        <label for="inputJumlah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah Obat</label>
                      <input type="number" autocomplete="off" id="inputJumlah" class="bg-gray-50 border border-blue-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-200 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  name="jumlah">
                    </div>
                    <input type="submit" name="tombolJumlah" class=" inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-blue-800 cursor-pointer" value="Masukan">
                    <input type="submit" name="tombolJumlah" class=" inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-green-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-green-800 cursor-pointer" value="Bayar">
                  </form>
               </div>
               <div class="col-span-4 row-span-2  rounded-md">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 dark:bg-gray-800 rounded-md">
                    <thead class="text-x text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-4 py-3 ">Nama Obat</th>
                            <th scope="col" class="px-4 py-3 ">Jumlah</th>
                            <th scope="col" class="px-4 py-3 ">Harga Satuan</th>
                            <th scope="col" class="px-4 py-3 ">Total Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                        <tr class="border-b dark:border-gray-700">
                            <td class="px-4 py-3 ">Actifed Sirup 60ML</td>
                            <td class="px-4 py-3 ">2</td>
                            <td class="px-4 py-3 ">37.000</td>
                            <td class="px-4 py-3 ">74.000</td>
                        </tr>
                        <tr class="border-b dark:border-gray-700">
                            <td class="px-4 py-3 ">Clopidogrel </td>
                            <td class="px-4 py-3 ">3</td>
                            <td class="px-4 py-3 ">21.000</td>
                            <td class="px-4 py-3 ">63.000</td>
                        </tr>

                            

                    </tbody>
                </table>
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 dark:bg-gray-800 mt-2 rounded-md">
                    <thead class="text-x text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-4 py-3 ">Bayar</th>
                            <th scope="col" class="px-4 py-3 ">Jumlah</th>
                            <th scope="col" class="px-4 py-3 ">Kembalian</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                        <tr class="border-b dark:border-gray-700">
                            <td class="px-4 py-3 ">140.000</td>
                            <td class="px-4 py-3 ">137.000</td>
                            <td class="px-4 py-3 ">3.000</td>
                        </tr>

                            

                    </tbody>
                </table>
            
           </div>
               
                </div>
    </section>
        <script src="" async defer></script>
    </body>
</html>