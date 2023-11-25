
<?php
include '../connection.php';

if(isset($_COOKIE['username'])){
    header('Location:../dashboard.php?page=obat');
   }
   

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="w idth=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="">
    </head>
    <body>
    <section class="bg-gray-50 dark:bg-gray-900">
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0 bg-black">
      <p href="" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
          <img class="w-14 h-14 mr-2 rounded-[50%] " src="https://i.pinimg.com/originals/9c/8e/35/9c8e35f23eecbeebe73a239c9fa50e45.jpg" alt="logo">
          Apotek Sehat    
</p>
      <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
              <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                  Sign in to your account
              </h1>
              <form class="space-y-4 md:space-y-6" action="processLogin.php" method="POST" enctype="multipart/form-data">
                  <div>
                      <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Username</label>
                      <input type="text" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your Username" required="">
                      <?php
                      if(@$notFoundUsn != null){
                        echo "NO USERNAME";
                      }

                      ?>
                  </div>
                  <div>
                      <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                      <input type="password" name="pass" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                      <?php
                     if(@$passErr != null){
                         echo "PASSWORD ERROR";
                       }
                       else{
                         
                       }
                      ?>
                  </div>
                  <div class="flex items-center justify-between">
                      <div class="flex items-start flex-col">
                          
                          <div class="text-sm flex justify-center items-center align-middle">
                            <label for="remember" class="text-gray-500 dark:text-gray-300">Remember me</label>
                            <input type="checkbox" name="" value="useCookies" id="" class="mt-1 ml-1">
                          </div>
                      </div>
                      <a href="#" class="text-sm text-white font-medium hover:underline dark:text-blue-500">Forgot password?</a>
                  </div>
                  <button type="submit" name="submit" class="w-full text-white bg-blue-500 hover:bg-white-700 focus:ring-4 focus:outline-none focus:ring-white-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-500 dark:hover:bg-white-700 dark:focus:ring-white-800">Sign in</button>
                  <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                      Don't have an account yet? <a href="register.php" class="font-medium text-blue-500 hover:underline dark:text-blue-500">Sign up</a>
                  </p>
              </form>
          </div>
      </div>
  </div>
</section>
    </body>
</html>