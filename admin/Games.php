<?php 
session_start();
    include ('includes/header.php');
    include ('../functions.php');
    $games = query('SELECT * FROM games');

   //sorting
   if(isset($_POST["sort"])){
      if($_POST["sort"] === "old"){
      $games = query("SELECT * FROM games ORDER BY id ASC");
      }
      if($_POST["sort"] === "new"){
      $games = query("SELECT * FROM games ORDER BY id DESC");
      }
   }
   //akhir sorting

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    
   <!-- Games Page -->
  <div style="background: #b29dca;">
    <div class="container pb-5" style="background-color: #b29dca;">

        <div class="row justify-content-center pt-3 ">
            <h2 class="text-center pb-3 pt-3 text-white">Games</h2>
            <form action="" method="POST" class="mt-5">
            <select id="sort" name="sort" onchange="this.form.submit();">
               <?php if($_POST["sort"] === "old") : ?>
               <option value="new">NEW</option>
               <option value="old" selected>OLD</option>
               <?php else : ?>
               <option value="new" selected>NEW</option>
               <option value="old">OLD</option>
               <?php endif ; ?>
               </select>
            </form>
                <?php
                        foreach ($games as $gm) {?>
                            <div class="col-lg-4 pb-4">
                               <div class="card text-white" style="border: black 100px; background-color: #61446c;">
                                  <img class="card-img-top" src="../asset/img/game/<?= $gm['image'] ?>" alt="" style="width: 100%; height:350px;">
                                  <div class="card-body">
                                     <h3 class="card-title text-center"><?=  $gm['title'] ?></h3>
                                     <div class= "text-center pt-2 pb-1"><a href="subcategory.php?id=<?= $gm['id'] ?>"><button type="button" class="btn btn-info">Browse</button></a></div>
                                  </div>
                               </div>
                            </div>  
                        <?php } ?>
         </div>
    </div>
 <!-- if session is set the Category Manageer button will be shown -->
 <?php
            if (isset($_SESSION['login'])){
                echo '<div class="text-center pt-5 pb-3"><a class="btn btn-warning btn-lg" href="games_manager.php">Games Manager</a></div>';
                echo '<div class="text-center"><a class="mt-3 mb-3 btn btn-success btn-lg" href="Games_add_form.php">Add Game</a></div>';

                  
        }?>
 </div>

    




<!-- Footer Added -->
<?php 
    require ('../footer.php');
 ?>

</body>
</html>