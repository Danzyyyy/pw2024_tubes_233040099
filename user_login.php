<?php 
    session_start();
    include ('header.php');
    require ('functions.php');

    if (isset($_POST['login'])) {
        $login = login($_POST);
    }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/login.css">

</head>
<body>
      
      <!-- USER Login Page -->
    <div class="" style="background-color: #222D32; padding-bottom: 100px;">
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box">
                <div class="col-lg-12 login-title">
                    USER LOGIN
                    <div class="text-center pt-5 text-danger ">
                        <!-- catche error --> 
                        <h3><?php 
                            if(isset($login['error'])) : ?>
                                <p><?= $login['message'] ?></p>
                            <?php endif; ?>
                    </div>
                </div>

                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form action="" method="post">
                            <div class="form-group">
                                <label class="form-control-label">USERNAME</label>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">PASSWORD</label>
                                <input type="password" name="password" id="password" class="form-control" i>
                            </div>

                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-6 login-btm login-button pt-2" style="margin-left: 30px;">
                                    <button type="submit" name="login" class="btn btn-outline-primary">LOGIN</button>
                                    </div>
                                <br><br><br>
                                <p class="text-white">No Account? <a href="user_signup.php"> Sign Up!</a></p>
                            </div>
                        </form>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>
    </div>


<!-- Footer Added -->
<?php 
    include ('footer.php');
 ?>

</body>
</html>