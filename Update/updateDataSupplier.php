<?php
// include '../connection.php';

// session_start();
// if(!isset($_SESSION['username'])){
//     header('Location: ../users/login.php');
// }
if(!isset($_COOKIE['username'])){
    header('Location: ../users/login.php');
}
$id = $_GET['id'];

$query = "SELECT * FROM tbsupplier WHERE idSupplier = $id";
$fetchData = mysqli_query($connection, $query);
$data = mysqli_fetch_assoc($fetchData);

//Data Update

@$namaSupplier = $_POST['namaPerusahaan'];
@$nomorTelepon = $_POST['nomorTelepon'];
@$alamatSupplier = $_POST['alamatSupplier'];
@$keterangan = $_POST['keterangan'];



if(isset($_POST['submit'])){
    $queryUpdate = "UPDATE tbsupplier 
    SET
     perusahaan = '$namaSupplier',
     telp = '$nomorTelepon',
     alamat = '$alamatSupplier',
     keterangan = '$keterangan' WHERE idSupplier = '$id'";
     mysqli_query($connection, $queryUpdate);
     header('Location:dashboard.php?page=supplier');
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
    <section class="bg-white dark:bg-gray-900 w-full ">
  <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
      <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Medicine Editing</h2>
      <form action="" method="POST" enctype="multipart/form-data">
          <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
              <div class="sm:col-span-1">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Perusahaan</label>
                  <input type="text" name="namaPerusahaan" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Isi Nama Obat" value="<?= htmlspecialchars($data['perusahaan']) ?>">
              </div>
              
              <div class="sm:col-span-1 ">
                  <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Telepon</label>
                  <input type="text" name="nomorTelepon" id="brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukan Kategori Obat" value="<?= htmlspecialchars($data['telp']) ?>" >
              </div>
 
              <div class="sm:col-span-2">
                  <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                  <textarea id="description" name="alamatSupplier" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your description here"><?= ($data['alamat']) ?></textarea>
              </div>
              <div class="sm:col-span-2">
                  <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
                  <textarea id="description" name="keterangan" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your description here"><?= ($data['alamat']) ?></textarea>
              </div>

          </div>
          <button type="submit" name='submit'class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
              Update Supplier
          </button>
      </form>
  </div>
</section>

    </body>
</html>