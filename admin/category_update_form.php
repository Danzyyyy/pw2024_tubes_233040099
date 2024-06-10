<?php 
    session_start();
    include ('includes/header.php');
    require ('../functions.php');
    $category = query('SELECT * FROM category ;')[0];

    if (isset($_POST['update'])){
        if(update($_POST)>0){
            echo "<script>
                    alert('Data Berhasil Diubah');
                    document.location.href = 'category_manager.php';
                </script>";
        } else {
            echo "<script>
                    alert('Data Gagal Diubah');
                    document.location.href = 'category_manager.php';
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
    

    <!--Backround Image  -->
 <div style="background-color:#b29dca ;">
    
    <div class="row pt-5 pb-3 justify-content center" style="align-items: center;">
        
        <!-- Category Update Form -->
        <div class="col-lg-12" style="align-items: center;">
            <div class="container" style="border: #000 solid; width: 700px; height: 550px; background: #252525b8;">
               
                <div class="contact-form p-3">
                    <div class="title text-center mb-3 pt-4 text-white">
                        <h3 class="font-weight bolder">Category Update</h3>
                    </div>
                    <form action="" class="m-auto bold-txt text-white" method="post" enctype="multipart/form-data">
                        <div class="form-group pt-5">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" id="title" value="<?= $category['title']; ?>">
                            <input type="text" class="form-control" name="oldtitle" value="<?= $category['title']; ?>" hidden>
                        </div>

                        <input type="text" name="id" value="<?= $_GET['id']; ?>" hidden>
                        
                        <div class="form-group pt-5">
                            <label for="image">Update Category Image: </label>
                            <input type="hidden" name="old_image" value="<?= $category['image']; ?>">
                             <input type="file" class="form-control-file" id="image" name="image" required>
                        </div>



                        <!-- Active & featured buttons -->
                        <div class="form-group pt-5 m-2">
                            <label for="location">Active </label>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="active" id="active1" value="true" value="<?= $category['active']; ?>">
                              <label class="form-check-label" for="active1">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="active" id="active2" value="false" value="<?= $category['active']; ?>">
                              <label class="form-check-label" for="active2">No</label>
                            </div>
                        </div>

                        <div class="form-group pt-3 m-2">
                            <label for="location">Featured </label>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="featured" id="featured" value="true" value="<?= $category['active']; ?>">
                              <label class="form-check-label" for="featured">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="featured" id="featured" value="false" value="<?= $category['featured']; ?>">
                              <label class="form-check-label" for="featured">No</label>
                            </div>
                        </div>

            

                        <div class="form-group text-center pt-5 bold-txt">
                            <button type="submit" name="update" class="frm-btn btn btn-warning text-center"> Confirm </button>
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