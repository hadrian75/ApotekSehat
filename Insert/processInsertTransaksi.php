<?php 
$tanggal = @$_POST['tanggal']; 
$kategori = @$_GET['kategoripelanggan'];
$namaPelanggan = @$_POST['namaPelanggan'];
$id_karyawan = @$_COOKIE['idKaryawan'];


$findID = mysqli_fetch_assoc(mysqli_query($connection, "SELECT idPelanggan FROM tbpelanggan WHERE namaLengkap='$namaPelanggan'"));
$idPelanggan = $findID['idPelanggan'];

$hasil = mysqli_query($connection, "INSERT INTO tbtransaksi VALUES(NULL, '$idPelanggan', '$id_karyawan', '$tanggal', '$kategori', 0, 0, 0) ");

$hasil_id_transaksi = mysqli_fetch_row(mysqli_query($connection, "SELECT LAST_INSERT_ID()"));

$_SESSION['idTransaksi'] = $hasil_id_transaksi[0];

if(!$hasil) {
    echo "Gagal Tambah Data Transaksi : ". mysqli_error($connection);
}else {
    header('Location:dashboard.php?page=detailTransaksi');
    exit;
}


?>