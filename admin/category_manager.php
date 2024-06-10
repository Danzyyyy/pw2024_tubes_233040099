<?php 
    session_start();
    include ('includes/header.php');
    require ('../functions.php');
    $category = query('SELECT * FROM category ;');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
      
    
    <style>


    </style>

</head>
<body>
    
   <!-- Category Manager -->
  <div style="background-color: #b29dca;">
    <div class="container pb-5">

        <div class="row justify-content-center pt-3 ">
            <h2 class="text-center pb-3 pt-3 text-white">Categories</h2>
                <?php
                        foreach ($category as $ctg) {?>
                            <div class="col-lg-4 pb-4">
                               <div class="card bg-dark text-white" style="border: black 100px;">
                               <img class="card-img-top" src="../asset/img/game/<?= $ctg['image'] ?>" alt="image" style="width: 100%; height:350px;">
                                  <div class="card-body">
                                     <h3 class="card-title text-center"><?= " $ctg[title] "; ?></h3>
                                     <h5 class="card-title">Active: <?php if ($ctg['active'] == 'true') {
                                         echo 'Yes';
                                     }else{echo 'NO';} ?></h5>
                                     <h5 class="card-title">Featured: <?php if ($ctg['featured'] == 'true') {
                                         echo 'Yes';
                                     }else{echo 'NO';} ?></h5>
                                     <div class= "text-center pt-5">
                                        <!-- update button sends category id with the url -->
                                      <a href="category_update_form.php?id=<?= $ctg['id']; ?>"><button type="button" class="btn btn-warning m-1">Update Category</button></a>
                                      <!-- delete button sends category id and title with the url -->
                                      <a href="category_del.php?id=<?= $ctg['id']; ?>&action=delete"><button type="button" name="delete" class="btn btn-danger">Delete Category</button></a>
                                    </div>
                                  </div>
                               </div>
                            </div>
                        <?php } ?>
                        <div class="text-center"><a class="mt-3 mb-3 btn btn-success btn-lg" href="category_add.php">Add Category</a></div>
         </div>
    </div>
 </div>
    
    


    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script> -->


<!-- Footer Added -->
<?php 
    include ('../footer.php');
 ?>

</body>
</html>