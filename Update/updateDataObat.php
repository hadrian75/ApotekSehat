<?php
include '../connection.php';

session_start();
// if(!isset($_SESSION['username'])){
//     header('Location: ../users/login.php');
// }
if(!isset($_COOKIE['username'])){
    header('Location: ../users/login.php');
}

$id = $_GET['id'];

$query = "SELECT * FROM tbobat WHERE idObat = $id";
$fetchData = mysqli_query($connection, $query);
$data = mysqli_fetch_assoc($fetchData);

//Data Update
@$idSupplier = $_POST['idSupplier'];
@$namaObat = $_POST['namaObat'];
@$kategoriObat = $_POST['kategoriObat'];
@$hargaJual = $_POST['hargaJual'];
@$hargaBeli = $_POST['hargaBeli'];
@$stokObat = $_POST['stokObat'];
@$keteranganObat = $_POST['keteranganObat'];


if(isset($_POST['submit'])){
             
    $queryUpdate = "UPDATE tbobat 
    SET idSupplier = '$idSupplier',
     namaObat = '$namaObat',
     kategoriObat = '$kategoriObat',
     hargaJual = '$hargaJual',
     hargaBeli = '$hargaBeli',
     stokObat = '$stokObat',
     keterangan = '$keteranganObat' WHERE idObat = '$id'";
     mysqli_query($connection, $queryUpdate);
    
     header("refresh:2 index.php");
}
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
        <?php include ('../component/navbar.php') ?>
    <section class="bg-white dark:bg-gray-900">
  <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
      <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Medicine Editing</h2>
      <form action="" method="POST">
          <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
              <div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Obat</label>
                  <input type="text" name="namaObat" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Isi Nama Obat" value="<?= htmlspecialchars($data['namaObat']) ?>">
              </div>
              <div>
                  <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Supplier</label>
                  <select id="category" name="idSupplier" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  <option value="">Pilih Supplier</option>
        <?php
        $querySupplier = "SELECT idSupplier, perusahaan FROM tbsupplier";
        $dataSupplier = mysqli_query($connection, $querySupplier);   
        while($fetchSupplier = mysqli_fetch_assoc($dataSupplier)){
            $selected = ($data['idSupplier'] == $fetchSupplier['idSupplier']) ? "selected" : "";
        ?>
            <option class="cursor-pointer" value="<?= $fetchSupplier['idSupplier']; ?>" <?= $selected ?>>
                <?php echo $fetchSupplier['perusahaan']; ?>
            </option>
        <?php }
        ?>
                  </select>
              </div>
              <div class="w-full">
                  <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori Obat</label>
                  <input type="text" name="kategoriObat" id="brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukan Kategori Obat" value="<?= htmlspecialchars($data['kategoriObat']) ?>" >
              </div>
              <div class="w-full">
                  <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga Jual</label>
                  <input type="number" name="hargaJual" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Rp.100000" value="<?= htmlspecialchars($data['hargaJual']) ?>">
              </div>
              <div class="w-full">
                  <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga Beli</label>
                  <input type="number" name="hargaBeli" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Rp.100000" value="<?= htmlspecialchars($data['hargaBeli']) ?>" >
              </div>
              <div class="w-full">
                  <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stok Obat</label>
                  <input type="number" name="stokObat" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ex. 200" value="<?= htmlspecialchars($data['stokObat']) ?>">
              </div>
              <div class="sm:col-span-2">
                  <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                  <textarea id="description" name="keteranganObat" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your description here"><?= ($data['keterangan']) ?></textarea>
              </div>
          </div>
          <button type="submit" name='submit'class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
              Update Obat
          </button>
      </form>
  </div>
</section>
    </body>
</html>