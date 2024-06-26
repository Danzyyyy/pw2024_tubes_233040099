<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TMW | STORE</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
   <link rel="icon" href="../asset/img/logo_tmw.png" type="image/png">
       <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"></script>
      
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
      
    
    <style>


    </style>

</head>
<body>
    
  <header>
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #61478f;">
       
        <a href="" class="navbar-brand">
            <img src="../asset/img/logo_tmw.png" alt="logo" style= "width: 70px; height: 100%; padding-left: 20px;">
        </a>
         <div class="col-lg-3">
            <h3 class="text-white mr-5"></h3>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
           
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a class="nav-link" href="admin.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="category.php">Category</a></li>
                <li class="nav-item"><a class="nav-link" href="games.php">Games</a></li>
                <li class="nav-item">
                    <?php if (isset($_SESSION['login'])) : ?>
                    <a class="nav-link" href="../logout.php">Logout</a></li>
                    <?php else : ?>
                    <a class="nav-link" href="../user_login.php">Login</a></li>
                    <?php endif; ?>
            </ul>
		</div>
       
    </nav>
</header>


 
    
    
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>
</html>