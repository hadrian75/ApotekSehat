<?php
include '../connection.php';

if(isset($_COOKIE['username'])){
 header('Location: ../Views/tampilDataPelanggan.php');
}


else{
if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($connection, ($_POST['username']));
    $pass = mysqli_real_escape_string($connection, ($_POST['pass']));
    
    $sql = "SELECT * FROM tblogin WHERE username='$username'";
    $result = mysqli_query($connection, $sql);
    $accFetch = mysqli_fetch_assoc($result);
    
    if(mysqli_num_rows($result) > 0 ) {
        echo $accFetch['pass'];
        $notFoundUsn == null;
        if (password_verify($pass, $accFetch['pass'])) {
            setcookie('username', $username, time() + (60 * 60 * 24 * 5), '/');
            setcookie('levelUser', $accFetch["levelUser"], time() + (60 * 60 * 24 * 5), '/');
            $passErr == null;
            header('Location: ../Views/tampilDataPelanggan.php');

       } else {
           $passErr = "Please Enter Your Password Correctly!";
           header('Location:login.php');
       }
    }
    else{
        $notFoundUsn = "Please Enter The Correct Username!";
        header('Location:login.php');
    }
    }
} 
// session_start();
//  if(isset($_SESSION['username'])){
//      header('Location: ../Views/tampilDataPelanggan.php');
//     }
//  else{
//      if (isset($_POST['submit'])) {
//          $username = mysqli_real_escape_string($connection, ($_POST['username']));
//          $password = mysqli_real_escape_string($connection, ($_POST['pass']));
      
//          $sql = "SELECT * FROM tblogin WHERE username='$username'";
//          $result = mysqli_query($connection, $sql);
//          $accFetch = mysqli_fetch_assoc($result);
      
//          if(mysqli_num_rows($result) > 0 ) {
//              echo $accFetch['password'];
//              $notFoundUsn == null;
//              if ($password == $accFetch['password']) {
//                   $_SESSION['username'] =  $username;
//                   $_SESSION['levelUser'] = $accFetch['levelUser'];
//                  $passErr == null;
//                  header('Location: ../Views/tampilDataPelanggan.php');
  
//             } else {
//                 $passErr = "Please Enter Your Password Correctly!";
//                 header('Location:login.php');
//             }
//          }
//          else{
//              $notFoundUsn = "Please Enter The Correct Username!";
//              header('Location:login.php');
//          }
//          }
//      } 


?>