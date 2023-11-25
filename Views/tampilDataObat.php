<?php
// include '../connection.php';

if(!isset($_COOKIE['username'])){
    header('Location: ../users/login.php');
}

$query = "SELECT tbobat. *, tbsupplier.idSupplier, tbsupplier.perusahaan
          FROM tbobat
          LEFT JOIN tbsupplier ON tbobat.idSupplier = tbsupplier.idSupplier WHERE 1=1";
          @$search = mysqli_real_escape_string($connection, $_GET['search']);
             if (!empty($search) && $search != "" && strlen($search) != 0 ) {
                $query .= " AND (tbobat.namaObat LIKE '%$search%')";
           }
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

    <section class="bg-gray-50 dark:bg-green-200 p-3 sm:p-5 h-full min-h-screen ">
    <div class="mx-auto max-w-screen-2xl px-4 lg:px-12">
        <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                <div class="w-full md:w-1/2">
                    <form class="flex items-center" method="GET">
                        <label for="simple-search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input type="text" id="simple-search" name="search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search" >
                        </div>
                    </form>
                </div>
                <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                   <a href="../Insert/insertDataObat.php">
                   <button type="button" class="flex items-center justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                        </svg>
                        Tambah Obat
                    </button>
                   </a>
                    <div class="flex items-center space-x-3 w-full md:w-auto">
                        
                        <button id="filterDropdownButton" data-dropdown-toggle="filterDropdown" class="w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-4 w-4 mr-2 text-gray-400" viewbox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd" />
                            </svg>
                            Filter
                            <svg class="-mr-1 ml-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-x text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-4 py-3 ">Kode Obat</th>
                            <th scope="col" class="px-4 py-3 ">Nama Supplier</th>
                            <th scope="col" class="px-4 py-3 ">Nama Obat</th>
                            <th scope="col" class="px-4 py-3 ">Kategori Obat</th>
                            <th scope="col" class="px-4 py-3 ">Harga Jual</th>
                            <th scope="col" class="px-4 py-3 ">Harga Beli </th>
                            <th scope="col" class="px-4 py-3 ">Stok Obat</th>
                            <th scope="col" class="px-4 py-3 ">Keterangan</th>
                            <th scope="col" class="px-4 py-3 text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                         <?php 
                         while($data = mysqli_fetch_assoc($datas)){

                    $idObat = $data['idObat'];
                    $checkQuery = "SELECT * FROM tbdetailtransaksi INNER JOIN tbobat ON tbdetailtransaksi.idObat = tbobat.idObat WHERE tbobat.idobat = '$idObat'";
                    $hideDelete = mysqli_query($connection, $checkQuery);
        ?>
                        <tr class="border-b dark:border-gray-700">
                            <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white"><?= $data['idObat'] ?></th>
                            <td class="px-4 py-3 "> (<?= $data['idSupplier'] ?>)<?= $data['perusahaan'] ?></td>
                            <td class="px-4 py-3 "><?= $data['namaObat'] ?></td>
                            <td class="px-4 py-3 "><?= $data['kategoriObat'] ?></td>
                            <td class="px-4 py-3 ">Rp.<?= $data['hargaJual'] ?></td>
                            <td class="px-4 py-3 ">Rp.<?= $data['hargaBeli'] ?></td>
                            <td class="px-4 py-3 "><?= $data['stokObat'] ?> pcs</td>
                            <td class="px-4 py-3 ">
                                <?= $data['keterangan'] ?>
                            </td>
                            <td class="px-3 py-3 flex  gap-2 items-center justify-center">
                            <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5  dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                <a href="dashboard.php?page=updateDataObat&id=<?=$data['idObat'] ?>">Edit</a>
                         </button>
                         <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5  dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 <?php if(mysqli_num_rows($hideDelete) > 0){echo "cursor-not-allowed ";} ?>">
                         <a href="<?php if(mysqli_num_rows($hideDelete) == 0) { echo 'dashboard.php?page=deleteDataObat&id=' . $data['idObat']; } ?>"
       class="<?php if(mysqli_num_rows($hideDelete) > 0){echo "cursor-not-allowed";} ?>"
       <?php if(mysqli_num_rows($hideDelete) > 0){echo "disabled aria-disabled='true' onclick='return false;'";} ?> >Delete</a>
</button>
</td>
</tr>

                            
                      <?php }  ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </section>
        <script src="" async defer></script>
    </body>
</html>