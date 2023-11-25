<?php
// session_start();
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


    <section class="bg-white dark:bg-gray-900 h-screen">
    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Tambah Karyawan Baru</h2>
        <form class="grid gap-4 sm:grid-cols-2 sm:gap-6" action="ProcessDataKaryawan.php" method="POST" enctype="multipart/form-data">
            <div class="sm:col-span-2">
                <label for="namaKaryawan" class="block mb-1 text-gray-900 font-light text-32">Nama Karyawan</label>
                <input type="text" id="namaKaryawan" name="namaKaryawan" class="bg-gray-50 border border-blue-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-200 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukan Nama Karyawan">
            </div>
            <div class="sm:col-span-2">
                <label for="nomorKaryawan" class="block mb-1 text-gray-900 font-light text-32">Nomor Telepon</label>
                <input type="text" id="nomorKaryawan" name="nomorKaryawan" class="bg-gray-50 border border-blue-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-200 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukan Nomor Telepon Karyawan">
            </div>
            <div class="sm:col-span-2">
                <label for="alamatKaryawan" class="block mb-1 text-gray-900 font-light text-32">Alamat</label>
                <textarea rows="4" id="alamatKaryawan" name="alamatKaryawan" class="bg-gray-50 border border-blue-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-200 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukan Alamat Karyawan"></textarea>
            </div>
            <div class="w-full flex justify-center mt-2">
                <button type="submit" class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-gray-900 rounded-lg focus:ring-4 focus:ring-gray-300 hover:bg-gray-800 dark:hover:bg-gray-800 dark:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
                    Kirim Data
                </button>
            </div>
        </form>
    </div>
</section>

    </body>
</html>