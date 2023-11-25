<?php
// include '../../connection.php';
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


       <!-- <form class="w-[480px] h-auto flex flex-col bg-green-300 py-6 px-8  rounded-sm m-auto gap-y-1" action="ProcessDataKaryawan.php" method="POST" enctype="multipart/form-data">

        
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
    </form> -->
    <section class="bg-white dark:bg-gray-900 h-screen">
    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Tambah Karyawan Baru</h2>
        <form class="grid gap-4 sm:grid-cols-2 sm:gap-6" action="ProcessDataKaryawan.php" method="POST" enctype="multipart/form-data">
            <div class="sm:col-span-2">
                <label for="namaKaryawan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Karyawan</label>
                <input type="text" id="namaKaryawan" name="namaKaryawan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukkan Nama Karyawan">
            </div>
            <div class="sm:col-span-2">
                <label for="nomorKaryawan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Telepon</label>
                <input type="text" id="nomorKaryawan" name="nomorKaryawan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukkan Nomor Telepon Karyawan">
            </div>
            <div class="sm:col-span-2">
                <label for="alamatKaryawan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                <textarea rows="4" id="alamatKaryawan" name="alamatKaryawan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukkan Alamat Karyawan"></textarea>
            </div>
            <div>
                <button type="submit" class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                    Kirim Data
                </button>
            </div>
        </form>
    </div>
</section>


    </body>
</html>