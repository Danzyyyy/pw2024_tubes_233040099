<?php 
session_start();
    include ('includes/header.php');
    include ('../functions.php');


    $category_id = $_GET['id'];
    $games = query("SELECT *, games.title AS gms_title, games.image AS gms_img, category.title AS ctg_title FROM games JOIN category ON category_id = category.id WHERE category_id = $category_id;");
    $result = mysqli_num_rows(mysqli_query($conn, "SELECT *, games.title AS gms_title, games.image AS gms_img, category.title AS ctg_title FROM games JOIN category ON category_id = category.id WHERE category_id = $category_id;"));
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                                  <img class="card-img-top" src="../asset/img/game/<?= $gms['gms_img'] ?>" alt="" style="width: 100%; height:350px;">
                                  <div class="card-body">
                                     <h3 class="card-title text-center"><?=  $gms['gms_title']; ?></h3>
                                     <div class= "text-center pt-2 pb-1"><a href="../order_form.php?title=<?= $gms['title'] ?>&price=<?= $gms['price'] ?>"><button type="button" class="btn btn-info">Browse</button></a></div>
                                  </div>
                               </div>
                            </div>  
                        <?php } ?>
         </div>
         <!-- if session is set the Category Manageer button will be shown -->
        <?php
            if (isset($_SESSION['username'])){
                echo '<div class="text-center pt-5 pb-3"><a class="btn btn-warning btn-lg" href="games_manager.php">Games Manager</a></div>';
                  
        }?>
              
    </div>
 </div>
    




<!-- Footer Added -->
<?php 
    require ('../footer.php');
 ?>

</body>
</html>