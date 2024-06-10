<?php
require '../functions.php';
require 'includes/header.php';

$category = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM category"));
$games = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM games"));
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="admin.css">
</head>
<body style="background-color: #b29dca;">
  <h2>Hallo admin</h2>
  <section class="home">
<div class="row row-cols-1 row-cols-md-3 g-4">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Categories</h5>
    <p class="card-text">Klik link untuk mengedit dan menambah kategori.</p>
    <a href="category.php" class="btn btn-primary">Check Details</a>
  </div>
</div>

    <div class="card" >
      <div class="card-body">
        <h5 class="card-title">Games</h5>
        <p class="card-text">Klik link untuk mengedit dan menambah games.</p>
        <a href="Games.php" class="btn btn-primary">Check Details</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <div class="card-body" style="width: 18rem;">
        <h5 class="card-title">Order Management</h5>
        <p class="card-text">Klik link untuk melihat orderan.</p>
        <a href="order.php" class="btn btn-primary">Check Details</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <div class="card-body" style="width: 18rem;">
        <h5 class="card-title">Order Management</h5>
        <p class="card-text">Klik link untuk melihat orderan.</p>
        <a href="order.php" class="btn btn-primary">Check Details</a>
      </div>
    </div>
  </div>
  </div>
</div>
</section>

<?php require 'includes/footer.php';?>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
</html>