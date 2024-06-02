<?php 
    include ('header.php');
    require ('functions.php');
    $search = $_POST['search'];
 ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <style>
    	.card-fix{
    		height: 650px;

    	}

    </style>

</head>
<body>
    

 <div style="background-color:#b29dca">
    <div class="container pb-5">
    	<!-- Search Results page -->
        <div class="row justify-content-center pt-3 ">
            <h4 class="text-center pb-5 pt-3 text-white">Search Results of "<span class="text-info"><?= "$search"; ?></span>"</h4>
                <?php
                if (ctype_alpha($_POST['search']) || ctype_alnum($_POST['search'])) {
                    $sql= "SELECT * FROM games WHERE title LIKE '%$search%' or description LIKE '%$search%' or category_id LIKE '%$search%';";
                    $result = mysqli_query($conn, $sql); 

                        while ($games = mysqli_fetch_array($result)) {?>
                            <div class="col-lg-4 pb-4">
                               <div class="card text-white card-fix" style="background-color:#61446c">
                                  <img class="card-img-top" src="asset/img/game/<?= $games['image'] ?>" alt="" style="width: 100%; height:350px;">
                                  <div class="card-body">
                                     <h3 class="card-title text-center"><?= " $games[title] "; ?></h3>
                                     <p><?= " $games[description] "; ?></p>
                                     <h5 class="card-title">Price: <?= " $games[price] "; ?> Rupiah</h5>
                                     <div class= "text-center pt-4"><a href="order_form.php?id=<?= $games['id']; ?>"><button type="button" class="btn btn-info">Buy Now</button></a></div>
                                  </div>
                               </div>
                            </div>
                    <?php 
                        }
                }
                else{?>
                    <h4 class="text-center pb-5 pt-3 text-white"> No result found</h4>
                    <?php  }?> 
          </div>
     </div>		
  </div>
    



    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script> -->


<!-- Footer Added -->
<?php 
    include ('footer.php');
 ?>
</body>
</html>