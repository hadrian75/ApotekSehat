<?php include "connection.php" ?>

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

        <style>
.wrap {
  position: relative;
}
.wrap  li:nth-child(3) ul{
max-height: 40px;
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
  z-index: 100;
  border-radius: 4px;

}

li:hover .submenu {
  height: 80px;

}
.submenu a {
  display: block;
  margin: 5px 0; 
  text-align:center;
}

        </style>
    </head>
    <body class="flex h-screen flex-col">
<?php 
session_start();
include("Component/navbar.php");

switch(@$_GET['page']){
    case "obat":
        include_once ("Views/tampilDataObat.php");
        break;
    case "insertDataObat":
        include_once ("Insert/insertDataObat.php");
        break;
    case "processInsertObat":
        include_once ("Insert/processDataObat.php");
        break;
    case "updateDataObat":
        include_once ("Update/updateDataObat.php");
        break;
    case "processUpdateObat":
        include_once ("Update/processUpdateObat.php");
        break;



    case "processDeleteObat":
        include_once ("Delete/deleteDataObat.php");
        break;
    case "processDeletePelanggan":
        include_once ("Delete/deleteDataPelanggan.php");
        break;





    case "pelanggan":
        include_once ("Views/tampilDataPelanggan.php");
        break;
    case "insertDataPelanggan":
        include_once "Insert/insertDataPelanggan.php";
        break;
    case "processDataPelanggan":
        include_once "Update/processDataPelanggan.php";
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
    case "detailTransaksi":
        include_once "Views/tampilDetailTransaksi.php";
        break;
}

?>


    </body>

</html>