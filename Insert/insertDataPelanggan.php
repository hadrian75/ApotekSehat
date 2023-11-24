<?php
session_start();
include '../connection.php';
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
        <style>
            .wrap {
  position: relative;
}

ul {
  list-style: none;
  padding: 0;
}

li {
  display: inline-block;
  margin-right: 20px;
}

a {
  color: #3862a0;
  text-decoration: none;
  position: relative;
}

.submenu {
  overflow: hidden;
  position: absolute;
  top: 100%;
  background-color: #3862a0;
  width: 75px;
  height: 0;
  transition: height 0.3s ease-in-out;
  display:flex;
  flex-direction:column;
}

li:hover .submenu {
  height: 80px;
  border-radius: 4px;
}
.submenu a {
  display: block;
  margin: 5px 0; 
  text-align:center;
}

        </style>
    </head>
    <body>
    <?php include ('../Component/navbar.php') ?>

    <!-- <h1 class="font-bold text-4xl my-4 text-center"> FORM PELANGGAN FAVORIT ADMIN</h1>

       <form class="w-[480px] h-auto flex flex-col bg-green-300 py-6 px-8  rounded-sm m-auto gap-y-1" action="processDataPelanggan.php" method="POST" enctype="multipart/form-data">

        
        <div>
    <label for="small-input" class="block mb-1 text-gray-900 font-light text-32">Nama Lengkap</label>
    <input type="text" id="small-input" name="namaPelanggan" class="block w-full p-2 text-gray-900 border border-blue-500 rounded-lg bg-gray-50 sm:text-xs focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-200 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukan Nama Karyawan">
</div>
        <div>
    <label for="small-input" class="block mb-1 text-gray-900 font-light text-32">Usia</label>
    <input type="text" id="small-input" name="usia" class="block w-full p-2 text-gray-900 border border-blue-500 rounded-lg bg-gray-50 sm:text-xs focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-200 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukan Nomor Telepon Karyawan">
        </div>
        <div>
    <label for="small-input" class="block mb-1 text-gray-900 font-light text-32">Nomor Telepon</label>
    <input type="text" id="small-input" name="nomorPelanggan" class="block w-full p-2 text-gray-900 border border-blue-500 rounded-lg bg-gray-50 sm:text-xs focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-200 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukan Nomor Telepon Karyawan">
</div>
        <div>
    <label for="small-input" class="block mb-1 text-gray-900 font-light text-32">Bukti Foto Resep</label>
    <input type="file" id="small-input" name="buktiFoto" class="block w-full p-2 text-gray-900 border border-blue-500 rounded-lg bg-gray-50 sm:text-xs focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-200 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukan Nomor Telepon Karyawan">
</div>
        <div>
    <label for="small-input" class="block mb-1 text-gray-900 font-light text-32">Alamat</label>
    <textarea rows="4" id="small-input" name="alamatPelanggan" class="block w-full p-2 text-gray-900 border border-blue-500 rounded-lg bg-gray-50 sm:text-xs focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-200 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukan Alamat Karyawan"></textarea>
</div>
<div class="w-full flex justify-center mt-2">
<button class=" text-white w-[40%]  hover:bg-gray-800 bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm  py-2.5 mr-2 mb-2 dark:hover:bg-gray-800 dark:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700" value="">Kirim Data</button>
<a href="../Views/tampilDataPelanggan.php" class=" translate-x-1 translate-y-2">List Data</a>
</div>
    </form> -->


    <section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Tambah Pelanggan Baru</h2>
        <form class="" action="processDataPelanggan.php" method="POST" enctype="multipart/form-data">
          <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
            
            <div class="sm:col-span-2">
                <label for="namaPelanggan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Lengkap</label>
                <input type="text" id="namaPelanggan" name="namaPelanggan" class="bg-gray-50 border border-blue-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-200 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukan Nama Pelanggan" required="">
            </div>
            <div class="w-full">
                <label for="usia" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Usia</label>
                <input type="text" id="usia" name="usia" class="bg-gray-50 border border-blue-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-200 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukan Usia Pelanggan" required="">
            </div>
            <div class="w-full">
                <label for="nomorPelanggan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Telepon</label>
                <input type="text" id="nomorPelanggan" name="nomorPelanggan" class="bg-gray-50 border border-blue-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-200 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukan Nomor Telepon Pelanggan" required="">
            </div>
            <div class="w-full">
                <label for="buktiFoto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bukti Foto Resep</label>
                <input type="file" id="buktiFoto" name="buktiFoto" class="bg-gray-50 border border-blue-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-200 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukan Bukti Foto Resep" required="">
            </div>
            <div class="sm:col-span-2">
                <label for="alamatPelanggan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                <textarea rows="4" id="alamatPelanggan" name="alamatPelanggan" class="bg-gray-50 border border-blue-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-200 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukan Alamat Pelanggan" required=""></textarea>
            </div>
          </div>
                <button type="submit" class=" inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800 max-w-[7rem]">
                    Submit
                </button>
        </form>
    </div>
</section>

    </body>
</html>