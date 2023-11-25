<?php
// include '../connection.php';

if(!isset($_COOKIE['username'])){
    header('Location: ../users/login.php');
}
?>

    <section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Tambah Transaksi</h2>
        <form action="#" method="POST">
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div class="sm:col-span-2">
                    <label for="kategoripelanggan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori Pelanggan</label>
                    <select name="kategoripelanggan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-200 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 cursor-pointer">
                        <option selected>Pilih Kategori Pelanggan</option>
                        <option value="Umum">Umum</option>
                        <option value="Khusus">Khusus</option>
                    </select>
                </div>
                <div class="col-span-1">
                    <input type="submit" class="text-white px-2 py-1 bg-red-500 text-[12px] rounded-sm"  value="Kembali">
                    <input type="submit" class="text-white px-2 py-1 bg-blue-500 text-[12px] rounded-sm"  value="Selanjutnya">
                </div>
            </div>
        </form>

        <?php
        if (@$_POST["kategoripelanggan"] == 'Khusus') {
            ?>
            <form action=" Insert/processInsertTransaksi?kategoripelanggan=Khusus" method="POST">
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
            <div class="col-span-2">
                    <label for="tanggal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal</label>
                    <input type="text" readonly name="tanggal" value="<?= date("Y-m-d"); ?>" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-200 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 " placeholder="Tanggal">
                </div>
                <div class="col-span-2">
                    <label for="namaPelanggan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Pelanggan</label>
                    <input list="namaPelanggan" name="namaPelanggan" id="namaPelanggan" type="text" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-200 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 " placeholder="Nama Pelanggan">
                    <datalist id="namaPelanggan">
                        <?php
                        $result = mysqli_query($connection, "SELECT namaLengkap FROM tbpelanggan");
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <option value="<?=$row['namaLengkap']; ?>"></option>
                            <?php
                        }
                        ?>
                    </datalist>
                </div>
                <input type="submit" class="text-white px-2 py-1 bg-blue-500 text-[12px] rounded-sm"  value="Selanjutnya">
            </div>
            </form>
            <?php
        } elseif (@$_POST["kategoripelanggan"] == 'Umum'){
            header('refresh:2, url=processInsertTransaksi?kategoripelanggan=Umum');
        }
        ?>
    </div>
</section>