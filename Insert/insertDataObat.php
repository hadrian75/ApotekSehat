<?php
include '../connection.php';
// if(!isset($_SESSION['username'])){
//     header('Location: ../../users/login.php');
// }
if(!isset($_COOKIE['username'])){
    header('Location: ../users/login.php');
}
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset=  "utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="keteranganObat" content="">
        <link rel="stylesheet" href="style.css?=<?php echo time() ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
    <?php include ('../component/navbar.php') ?>

    <!-- <h1 class="font-bold text-4xl my-4 text-center"> FORM OBAT OBATAN ASELI</h1> -->
    <!-- <div class="absolute w-[200px] h-[500px] left-20  flex flex-col gap-y-2 items-start justify-center">
        <img src="./img/duid.jpg"   class="h-auto w-[300px] object-cover " alt="">
        <img src="./img/help.jpeg"  class="h-auto w-[300px] object-cover " alt="">
    </div> -->
       <!-- <form class="w-[480px] h-auto flex flex-col bg-green-300 py-6 px-8  rounded-sm m-auto gap-y-1" action="ProcessDataObat.php" method="POST" enctype="multipart/form-data"> -->
       <!-- <div>
    <label for="small-input" class="block mb-1 text-gray-900 font-light text-32">ID Obat</label>
    <input type="number" id="small-input" name="idObat" class="block w-full p-2 text-gray-900 border border-blue-500 rounded-lg bg-gray-50 sm:text-xs focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-200 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 [-moz-appearance:_textfield] [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none" placeholder="Masukan ID Obat" maxlength="4" >
</div> -->
        <!-- <div>
            <label for="supplier" class=" block leading-6">ID Supplier</label>
            <select id="supplier" name="idSupplier" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-200 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 cursor-pointer" >
            <option selected >Pilih Supplier</option>
           
</select>
        </div>
        <div>
    <label for="small-input" class="block mb-1 text-gray-900 font-light text-32">Nama Obat</label>
    <input type="text" id="small-input" name="namaObat" class="block w-full p-2 text-gray-900 border border-blue-500 rounded-lg bg-gray-50 sm:text-xs focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-200 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukan Nama Obat">
</div>
        <div>
    <label for="small-input" class="block mb-1 text-gray-900 font-light text-32">Kategori Obat</label>
    <input type="text" id="small-input" name="kategoriObat" class="block w-full p-2 text-gray-900 border border-blue-500 rounded-lg bg-gray-50 sm:text-xs focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-200 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukan Kategori Obat (Sirup/ Kaplet/ Bubuk)">
</div>
        <div>
    <label for="small-input" class="block mb-1 text-gray-900 font-light text-32">Harga Jual</label>
    <input type="text" id="small-input" name="hargaJual" class="block w-full p-2 text-gray-900 border border-blue-500 rounded-lg bg-gray-50 sm:text-xs focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-200 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukan Harga Jual">
</div>
        <div>
    <label for="small-input" class="block mb-1 text-gray-900 font-light text-32">Harga Beli</label>
    <input type="text" id="small-input" name="hargaBeli" class="block w-full p-2 text-gray-900 border border-blue-500 rounded-lg bg-gray-50 sm:text-xs focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-200 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukan Harga Beli">
</div>
        <div>
    <label for="small-input" class="block mb-1 text-gray-900 font-light text-32">Stock Obat</label>
    <input type="text" id="small-input" name="stokObat" class="block w-full p-2 text-gray-900 border border-blue-500 rounded-lg bg-gray-50 sm:text-xs focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-200 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukan Jumlah Stock">
</div>
        <div>
    <label for="small-input" class="block mb-1 text-gray-900 font-light text-32">Keterangan Obat</label>
    <textarea rows="4" id="small-input" name="keteranganObat" class="block w-full p-2 text-gray-900 border border-blue-500 rounded-lg bg-gray-50 sm:text-xs focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-200 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukan Keterangan"></textarea>
</div>
<div class="w-full flex justify-center mt-2">
<button class=" text-white w-[40%]  hover:bg-gray-800 bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm  py-2.5 mr-2 mb-2 dark:hover:bg-gray-800 dark:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700" value="">Kirim Data</button>
<a href="Views/tampilDataObat.php" class=" translate-x-1 translate-y-2">List Data</a>
</div>
    </form> -->
    <section class="bg-white dark:bg-gray-900">
  <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
      <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Tambah Obat Baru</h2>
      <form action="#">
          <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
              <div class="sm:col-span-2">
                  <label for="namaObat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Obat</label>
                  <input type="text" name="namaObat" id="namaObat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nama Obat" required="">
              </div>
              <div class="w-full">
                  <label for="kategoriObat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">kategoriObat</label>
                  <input type="text" name="kategoriObat" id="kategoriObat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder=" Kategori Obat (e.g Keras, Salep )" required="">
              </div>
              <div class="w-full">
                  <label for="hargaBeli" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga Beli</label>
                  <input type="text" name="hargaBeli" id="hargaBeli" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Harga Beli" required="">
              </div>
              <div>
                  <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                  <select id="supplier" name="idSupplier" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-200 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 cursor-pointer" >
            <option selected >Pilih Supplier</option>
            <?php
        $querySupplier = "SELECT * FROM tbsupplier";
        $dataSupplier = mysqli_query($connection, $querySupplier);         
        while($fetchSupplier = mysqli_fetch_assoc($dataSupplier)){?>
          <option class="cursor-pointer" value="<?= $fetchSupplier['idSupplier']; ?>"><?php echo $fetchSupplier['perusahaan']; ?></option>
     <?php }
    ?>
                  </select>
              </div>
              <div>
                  <label for="hargaJual" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga Jual</label>
                  <input type="text" name="hargaJual" id="hargaJual" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Harga Jual" required="">
              </div> 
              <div class="sm:col-span-2">
                  <label for="keteranganObat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan Obat</label>
                  <textarea id="keteranganObat" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Keterangan Obat (e.g bahan obat, kegunaan obat )"></textarea>
              </div>
          </div>
          <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
              Add product
          </button>
      </form>
  </div>
</section>
    </body>
</html>