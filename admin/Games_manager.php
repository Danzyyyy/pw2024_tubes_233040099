<?php 
    include ('includes/header.php');
    require ('includes/functions.php');

    $games = query('SELECT * FROM games;');
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
    	
    	.card-fix{
    		height: 700px;

    	}

    </style>

</head>
<body>
    <!-- Games Manager -->
 <div style="background: #b29dca;">
    <div class="container pb-5">
        <div class="row justify-content-center pt-3 ">
            <h2 class="text-center pb-3 pt-3 text-white">Games Manager</h2>
                <?php
                    foreach ($games as $gm) {?>
                            <div class="col-lg-4 pb-4">
                               <div class="card text-white card-fix" style="background-color:#61446c;">
                                   <img class="card-img-top" src="../asset/img/game/<?= $gm['image'];?>" alt="" style="width: 100%; height:350px;">
                                  <div class="card-body">
                                     <h3 class="card-title text-center"><?= "$gm[title]"; ?></h3>
                                     <p><?= " $gm[description] "; ?></p>
                                     <h5 class="card-title">Price: Rp<?= " $gm[price] "; ?></h5>
                                     <h5 class="card-title">Active: <?php if ($gm['active'] == 'true') {
                                         echo 'Yes';
                                     }else{echo 'NO';} ?></h5>
                                     <h5 class="card-title">Exclusive: <?php if ($gm['exclusive'] == 'true') {
                                         echo 'Yes';
                                     }else{echo 'NO';} ?></h5>
                                     <div class= "text-center pt-3 mt-2">
                                        <!-- update button sends game id with the url -->
                                      <a href="Games_Update_form.php?id=<?= $gm['id']; ?>"><button type="button" name="update" class="btn btn-warning m-1">Update Game</button></a>
                                      <!-- delete button sends game id with the url -->
                                      <a href="Games_manager_backend.php?id=<?= $gm['id']; ?>&action=delete"><button type="button" name="delete" class="btn btn-danger">Delete Game</button></a>
                                    </div>
                                  </div>
                               </div>
                            </div>
                <?php }?> 

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