<?php 
session_start();
    include ('includes/header.php');
    require ('../functions.php');
    $games = query('SELECT * FROM games ;');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
    <!-- <link rel="stylesheet" href="../css/table.css"> -->
    <link rel="stylesheet" href="../css/table.css">
      
    

</head>
<body>
    
   <!-- Category Manager -->
  <div style="background-color: #b29dca;">
    <div class="container pb-5">

        <div class="row justify-content-center pt-3 ">
            <h2 class="text-center pb-3 pt-3 text-white">Games</h2>
                <?php
                        foreach ($games as $gm) {?>
                            <div class="col-lg-4 pb-4">
                               <div class="card bg-dark text-white" style="border: black 100px;">
                               <img class="card-img-top" src="../asset/img/game/<?= $gm['image'] ?>" alt="image" style="width: 100%; height:350px;">
                                  <div class="card-body">
                                     <h3 class="card-title text-center"><?= " $gm[title] "; ?></h3>
                                        <p><?= " $gm[description] "; ?></p>
                                     <h5 class="card-title text-center">Rp<?= " $gm[price] "; ?></h5>
                                     <h5 class="card-title">Active: <?php if ($gm['active'] == 'true') {
                                         echo 'Yes';
                                     }else{echo 'NO';} ?></h5>
                                     <h5 class="card-title">Featured: <?php if ($gm['exclusive'] == 'true') {
                                         echo 'Yes';
                                     }else{echo 'NO';} ?></h5>
                                     <div class= "text-center pt-5">
                                        <!-- update button sends games id with the url -->
                                      <a href="games_update_form.php?id=<?= $gm['id']; ?>"><button type="button" class="btn btn-warning m-1">Update Game</button></a>
                                      <!-- delete button sends games id and title with the url -->
                                      <a href="games_del.php?id=<?= $gm['id']; ?>&action=delete"><button type="button" name="delete" class="btn btn-danger">Delete Game</button></a>
                                    </div>
                                  </div>
                               </div>
                            </div>
                        <?php } ?>
                        <div class="text-center"><a class="mt-3 mb-3 btn btn-success btn-lg" href="games_add_form.php">Add Games</a></div>
         </div>
    </div>
 </div>
    
    


    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script> -->


<!-- Footer Added -->
<?php 
    include ('includes/footer.php');
 ?>

</body>
</html>