<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Insert Transaksi</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body class="flex h-screen flex-col">
<?php 
session_start();
include("../component/navbar-view.php");

switch(@$_GET['page']){
    case "obat":
        include_once "Views/tampilDataObat.php";
        break;
    case "insert_obat":
        include_once "Insert/insertDataObat.php";
        break;
    case "process_insert_obat":
        include_once "Insert/processDataObat.php";
        break;
    case "UpdateDataobat":
        include_once "Update/updateDataObat.php";
        break;
    case "process_Update_obat":
        include_once "Update/processUpdateObat.php";
        break;


    case "pelanggan":
        include_once "Views/tampilDataPelanggan.php";
        break;
    case "insertDataPelanggan":
        include_once "Update/insertDataPelanggan.php";
        break;
    case "processDataPelanggan":
        include_once "Update/processDataPelanggan.php";
        break;
    case "updatePelanggan":
        include_once "Update/updatePelanggan.php";
        break;
    case "processUpdatePelanggan":
        include_once "Update/processUpdatePelanggan.php";
        break;

    case "insertTransaksi":
        include_once "Insert/insertTransaksi.php";
        break;
    case "processInsertTransaksi":
        include_once "Insert/processInsertTransaksi.php";
        break;
    case "detail_transaksi":
        include_once "Views/tampilDetailTransaksi.php";
        break;
}

?>


<script src="https://cdn.tailwindcss.com"></script>
    </body>

</html>