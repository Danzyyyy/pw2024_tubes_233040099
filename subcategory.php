<?php 
    include ('header.php');
    include ('functions.php');

    $conn = koneksi();

    $category_id = $_GET['id'];
    $games = query("SELECT *, games.title AS gms_title, games.image AS gms_img, category.title AS ctg_title FROM games JOIN category ON category_id = category.id WHERE category_id = $category_id;");
    $result = mysqli_num_rows(mysqli_query($conn, "SELECT *, games.title AS gms_title, games.image AS gms_img, category.title AS ctg_title FROM games JOIN category ON category_id = category.id WHERE category_id = $category_id;"));
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
      
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> -->
        
    <style>


    </style>

</head>
<body>
    
   <!-- Categories Page -->
  <div style="background: #b29dca;">
    <div class="container pb-5" style="background-color: #b29dca;">

        <div class="row justify-content-center pt-3 ">
            <?php if($result == 0) : ?>
            <h2 class="text-center pb-3 pt-3 text-white">Games not available</h2>
            <?php else : ?>
            <h2 class="text-center pb-3 pt-3 text-white"><?= $games[0]['ctg_title']?></h2>
            <?php endif; ?>
                <?php
                        foreach ($games as $gms) {?>
                            <div class="col-lg-4 pb-4">
                               <div class="card bg-dark text-white" style="border: black 100px;">
                                  <img class="card-img-top" src="asset/img/game/<?= $gms['gms_img'] ?>" alt="" style="width: 100%; height:350px;">
                                  <div class="card-body">
                                     <h3 class="card-title text-center"><?=  $gms['gms_title']; ?></h3>
                                     <div class= "text-center pt-2 pb-1"><a href="category_game.php?cat=;?>"><button type="button" class="btn btn-info">Browse</button></a></div>
                                  </div>
                               </div>
                            </div>  
                        <?php } ?>
         </div>
         <!-- if session is set the Category Manageer button will be shown -->
        <?php
            if (isset($_SESSION['username'])){
                echo '<div class="text-center pt-5 pb-3"><a class="btn btn-warning btn-lg" href="category_manager.php">Category Manager</a></div>';
                  
        }?>
              
    </div>
 </div>
    


    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script> -->


<!-- Footer Added -->
<?php 
    require ('footer.php');
 ?>

</body>
</html>