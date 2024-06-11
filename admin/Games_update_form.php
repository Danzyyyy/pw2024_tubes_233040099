<?php 
session_start();
    include ('includes/header.php');
    require ('../functions.php');

    if (isset($_POST['update'])){
        if(update_games($_POST)>0){
            echo "<script>
                    alert('Data Berhasil Diubah');
                    document.location.href = 'games_manager.php';
                </script>";
        } else {
            echo "<script>
                    alert('Data Gagal Diubah');
                    document.location.href = 'games_manager.php';
                </script>";
        }
    }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
      
    
    <style>
        
        .bold-txt{
            font-weight: bold;
        }

    </style>

</head>

<body> 
    
    <!-- Background Img -->
    <div style="background-image: url(img/4848691.jpg);">
    
    <div class="row pt-5 pb-3 justify-content center" style="align-items: center;">
        
        <!-- Update Game Form -->
        
        <div class="col-lg-12" style="align-items: center;">
            <div class="container" style="border:#000 solid; width: 700px; height: 800px; background: #252525b8;">
               
                <div class="contact-form p-3">
                    <div class="title text-center mb-3 pt-4 text-white">
                        <h3 class="font-weight bolder">Update Game</h3>
                    </div>
                    <form action="" class="m-auto bold-txt text-white" method="post" enctype="multipart/form-data">
                        <?php
                    $sql= "SELECT * FROM games WHERE id ='$_GET[id]';";
                    $result = mysqli_query($conn, $sql); 

                        while ($games = mysqli_fetch_array($result)) {?>
                        <div class="form-group pt-5">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" id="title" value="<?php echo $games['title']; ?>">
                        </div>
                        <input type="text" name="id" value="<?php echo $_GET['id']; ?>" hidden>
                        <div class="form-group pt-5">
                             <label class="my-1 mr-2" for="category">Category</label>
                             <select class="custom-select my-1 mr-sm-2" id="category" name="category_id">
                             <option selected>Choose...</option>
                             <!-- shows the category that are available in the category list -->
                             <?php
                                $sql= 'SELECT * FROM category WHERE active = "true";';
                                $result = mysqli_query($conn, $sql); 

                                while ($category = mysqli_fetch_array($result)) {?>
                             <option value="<?php echo $category['id']; ?>"><?php echo " $category[title] "; ?></option>
                             <?php } ?>
                        </select>
                        </div> 
                        <div class="form-group pt-5">
                            <label for="image">Update Image: </label>
                            <input type="hidden" name="old_image" value="<?= $games['image']; ?>">
                             <input type="file" class="form-control-file" id="image" name="image" required>
                        </div>

                        <div class="form-group pt-5">
                            <label for="description">Description</label>
                            <input type="text" class="form-control" id="description" name="description" value="<?php echo $games['description']; ?>">
                        </div>

                        <div class="form-group pt-5">
                            <label for="price">Price</label>
                            <input type="number" class="form-control" name="price" id="price" min="0" value="<?php echo $games['price']; ?>">
                        </div>

                        <!-- Active & exclusive buttons -->
                        <div class="form-group pt-5 m-2">
                            <label for="location">Active </label>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="active" id="active1" value="true" value="<?php echo $games['active']; ?>">
                              <label class="form-check-label" for="active1">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="active" id="active2" value="false" value="<?php echo $games['active']; ?>">
                              <label class="form-check-label" for="active2">No</label>
                            </div>
                        </div>

                        <div class="form-group pt-3 m-2">
                            <label for="location">Exclusive </label>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="exclusive" id="exclusive1" value="true" value="<?php echo $games['exclusive']; ?>">
                              <label class="form-check-label" for="exclusive1">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="exclusive" id="exclusive2" value="false" value="<?php echo $games['exclusive']; ?>">
                              <label class="form-check-label" for="exclusive2">No</label>
                            </div>
                        </div>

                        <div class="form-group text-center pt-5 bold-txt">
                            <button type="submit" name="update" class="frm-btn btn btn-warning text-center"> Confirm </button>
                        </div>
                        <?php }?> 
            
                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 
    
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<!-- Footer Added -->
<?php 
    include ('includes/footer.php');
 ?>

</body>
</html>