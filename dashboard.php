<?php
  require 'functions.php';

  
  // if(isset($_SESSION['login'])) {
  // }
  
  // if($role != 'admin') {
  //   header("location: index.php");
  // }

  // $username = $_SESSION['username'];
  // $id = $_SESSION['id'];
  // $role = query("SELECT role FROM admins WHERE id = $id")[0]['role'];

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Dashboard | TMW Store</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <?php require 'header.php' ?>
    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
    <header>Halo <?= $_SESSION["username"] ?></header>
  <ul>
    <li><a href="#"><i class="fas fa-qrcode"></i>Manage User</a></li>
    <li><a href="#"><i class="fas fa-link"></i>Categories</a></li>
    <li><a href="#"><i class="fas fa-stream"></i>Product</a></li>
    <li><a href="#"><i class="fas fa-calendar-week"></i>Order Management</a></li>
  </ul>
</div>
<div class="right default">
      <h1>Welcome <?= $_SESSION['username']; ?></h1>
     
 <section>

 </section>

  </body>
</html>
