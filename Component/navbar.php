

<nav class="bg-white border-gray-200 dark:bg-gray-900">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
  <a href="" class="flex items-center  text-2xl font-semibold text-gray-900 dark:text-white">
          <img class="w-14 h-14 mr-2 rounded-[50%] " src="https://i.pinimg.com/originals/9c/8e/35/9c8e35f23eecbeebe73a239c9fa50e45.jpg" alt="logo">
          <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Apotek Sehat</span> 
      </a>

    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <ul class=" wrap font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
          <a href="dashboard.php?page=obat" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent  md:p-0 dark:text-white hover:md:dark:text-blue-500" aria-current="page">Obat</a>
          <ul class="submenu bg-white"> 
         <li><a href="dashboard.php?page=insertDataObat" class="hover:text-blue-700 text-black">Insert</a></li>
        <li><a href="dashboard.php?page=obat" class="hover:text-blue-700 text-black">Views</a></li>
       </ul>
        </li>
        <li>
          <a href="dashboard.php?page=pelanggan" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Pelanggan</a>
          <ul class="submenu bg-white"> 
         <li><a href="dashboard.php?page=insertDataPelanggan" class="hover:text-blue-700 text-black">Insert</a></li>
        <li><a href="dashboard.php?page=pelanggan" class="hover:text-blue-700 text-black">Views</a></li>
       </ul>
        </li>
        <li>
          <a href="dashboard.php?page=transaksi" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Transaksi</a>
          <ul class="submenu bg-white"> 
         <li><a href="dashboard.php?page=insertTransaksi" class="hover:text-blue-700 text-black">Insert</a></li>
         <li><a href="dashboard.php?page=transaksi" class="hover:text-blue-700 text-black">Views</a></li>
       </ul>
        </li>
        <li>
          <a href="dashboard.php?page=supplier" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Supplier</a>
          <ul class="submenu bg-white"> 
         <li><a href="dashboard.php?page=insertDataSupplier" class="hover:text-blue-700 text-black">Insert</a></li>
         <li><a href="dashboard.php?page=supplier" class="hover:text-blue-700 text-black">Views</a></li>
       </ul>
        </li>
        <?php
        if(@$_COOKIE['levelUser'] == "admin"){
        ?>
        <li class="relative userDashboardList">
        <a href="dashboard.php?page=adminDashboard" class="text-red-600">Dashboard <?php if(@$_COOKIE['levelUser'] == "admin"){ echo "Admin";} else {echo "";}?></a>
        <ul class="submenus bg-white"> 
         <li><a href="dashboard.php?page=adminDashboard" class="hover:text-blue-700 text-black">User Regist</a></li>
        <li><a href="dashboard.php?page=insertDataKaryawan" class="hover:text-blue-700 text-black">Insert Karyawan</a></li>
        <li><a href="dashboard.php?page=karyawan" class="hover:text-blue-700 text-black">Karyawan</a></li>
       </ul>
        </li>
        <?php } ?>
        <li class="relative max-w-[1px] text-red-600">|</li>
        <li class="relative w-20">

           <button onclick="myFunction()" class="dropbtn w-[40px] text-blue-500">
           <?=@$_COOKIE['username']?>
           </button>
           <div id="myDropdown" class="dropdown-content hidden absolute z-10 py-2 bg-red-500 w-20 justify-center rounded-md border-white border-[1px]">
              <a href="users/logout.php" class= "text-white mx-auto block ml-1  ">Sign Out</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>

<script>
  function myFunction() {
  document.getElementById("myDropdown").classList.toggle("hidden");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('block')) {
        openDropdown.classList.remove('block');
        openDropdown.classList.add('hidden');
      }
    }
  }
}
</script>

