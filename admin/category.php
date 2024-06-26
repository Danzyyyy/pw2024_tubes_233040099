<?php 
session_start();
    include ('includes/header.php');
    include ('../functions.php');
    $category = query('SELECT * FROM category ;');

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
            <h2 class="text-center pb-3 pt-3 text-white">Categories</h2>
                <?php
                        foreach ($category as $ctg) {?>
                            <div class="col-lg-4 pb-4">
                               <div class="card text-white" style="border: black 100px; background-color: #61446c;">
                                  <img class="card-img-top" src="../asset/img/game/<?= $ctg['image'] ?>" alt="" style="width: 100%; height:350px;">
                                  <div class="card-body">
                                     <h3 class="card-title text-center"><?= " $ctg[title] "; ?></h3>
                                     <div class= "text-center pt-2 pb-1"><a href="subcategory.php?id=<?= $ctg['id'] ?>"><button type="button" class="btn btn-info">Browse</button></a></div>
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
    require ('includes/footer.php');
 ?>

</body>
</html>