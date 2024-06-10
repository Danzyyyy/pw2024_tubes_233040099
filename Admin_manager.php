<?php 
    include ('header.php');
    require ('functions.php');
    $games = query("SELECT * FROM games");
    $users = query("SELECT * FROM users");
    $total_sell=0;
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>

    
    <div class="container-fluid bg-dark" style="padding-bottom: 100px;">
        <div class="team-table bg-dark text-warning">
         <div class="title text-center mb-1">
             <h3 class= "font-weight bolder py-5">Admin Manager</h3>
         </div>
     <!-- Admin Manager Table -->
     <table class="table table-bordered text-center text-white">
         <thead class="thead">
             <tr>
     
                 <th>ID</th>
                 <th>Full Name</th>
                 <th>Username</th>
                 <th>Actions</th>  
             </tr>
         </thead>
         <tbody>
                <?php
                $i = 1;
                foreach ($users as $usr) : ?>
                            <tr>
                                <td class="p-3"><?= $i++ ?></td>
                                <td class="p-3"><?= "$usr[full_name]";?></td>
                                <td class="p-3"><?= "$usr[username]";?></td>
                                <td class="p-3"><?= "$usr[role]";?></td>
                                <td class="float-left">
                                    <a class="btn btn-outline-danger" href="User_delete.php?id=<?= $usr['id']; ?>">Delete User</a>
                                 </td>
                            </tr>
                        <?php endforeach;?>
             </tbody>
         </table>


<div class="pt-3"></div>
<!-- Earnings Table -->
         <div class="title text-center mb-1 text-warning">
             <h3 class= "font-weight bolder py-5">Earnings</h3>
         </div>
    <table class="table table-bordered text-center text-white">
         <thead class="thead">
             <tr>
                 <th>Game</th>
                 <th>Total Sell</th>
                 <th>Total Amount</th>
             </tr>
         </thead>
         <tbody>
            <?php foreach ($games as $games) : ?>
                            <tr>
                                <td class="p-3"><?= "$games[title]"; ?></td>
                                <td class="p-3"><?= "$games[total_sell]"; ?></td>
                                 <td class="p-3"><?php $sell = $games['total_sell']*$games['price']; $total_sell+=$sell; echo $sell; ?></td>
                            </tr>
                <?php endforeach; ?>
         </tbody>
     </table>

                <div class="row">
                <div class= col-lg-4></div>     
                <div class= col-lg-4>
                <div class="text-center text-warning pt-5"><h5 class="p-4" style="border: 2px solid white">Total Earnings: <?= $total_sell; ?> Rupiah </h5> </div>
                </div>
                </div>    
                <div class= col-lg-4>
                </div>
   </div> 

<?php  require ('order.php');?>

  <!-- Footer Added -->
<?php 
    include ('footer.php');
 ?>


</body>
</html>