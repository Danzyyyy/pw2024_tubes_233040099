<?php 
    session_start();
    include ('includes/header.php');
    require ('../functions.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<body>

    
    <div class="container-fluid " style="padding-bottom: 100px; background-color:#b29dca;">
        <div class="team-table text-warning">
         <div class="title text-center mb-1">
             <h3 class= "font-weight bolder py-5">Pending Orders</h3>
         </div>
     
     <!-- Pending Order Table -->
     <table class="table table-bordered text-center text-dark">
         <thead class="thead">
             <tr>
     
                 <th>ID</th>
                 <th>Name</th>
                 <th>Email</th>
                 <th>Address</th> 
                 <th>Phone</th>
                 <th>Game</th>
                 <th>Order Date</th>
                 <th>Total Price</th>
                 <th>Action</th>
             </tr>
         </thead>
         <tbody>
            <?php
                    $sql= 'SELECT * FROM orders where status ="pending"';
                    $result = mysqli_query($conn, $sql); 

                        while ($orders = mysqli_fetch_array($result)) {?>
                        <tr>
                            <td class="p-3"><?= "$orders[id]"; ?></td>
                            <td class="p-3"><?= "$orders[customer_name]"; ?></td>
                            <td class="p-3"><?= "$orders[customer_email]"; ?></td>
                            <td class="p-3"><?= "$orders[customer_address]"; ?></td>
                            <td class="p-3">0<?= "$orders[customer_phone]"; ?></td>
                            <td class="p-3"><?= "$orders[game]"; ?></td>
                            <td class="p-3"><?= "$orders[order_date]"; ?></td>
                            <td class="p-3"><?= "$orders[total_price]"; ?> Rupiah</td>
                            <td class="float-left">
                            <a class="btn btn-success" href="order_backend.php?id=<?= $orders['id']; ?> & title=<?= $orders['game']; ?>">Confirm Order</a>
                             </td>
                        </tr>
                <?php 
                    } 
                ?>
         </tbody>
     </table>


   <div class="pt-5 mb-5">
   <div class="title text-center mb-1">
             <h3 class= "font-weight bolder py-5">Confirm Orders</h3>
         </div>

         <!-- Confirm Order Table -->
     <table class="table table-bordered text-center text-dark">
         <thead class="thead">
             <tr>
                 <th>ID</th>
                 <th>Name</th>
                 <th>Email</th>
                 <th>Address</th> 
                 <th>Phone</th>
                 <th>Game</th>
                 <th>Order Date</th>
                 <th>Total Price</th>
             </tr>
         </thead>
         <tbody>
            
         <?php
                    $sql= 'SELECT * FROM orders where status ="confirm"';
                    $result = mysqli_query($conn, $sql); 

                        while ($orders = mysqli_fetch_array($result)) {?>
                        <tr>
                            <td class="p-3"><?= "$orders[id]"; ?></td>
                            <td class="p-3"><?= "$orders[customer_name]"; ?></td>
                            <td class="p-3"><?= "$orders[customer_email]"; ?></td>
                            <td class="p-3"><?= "$orders[customer_address]"; ?></td>
                            <td class="p-3">0<?= "$orders[customer_phone]"; ?></td>
                            <td class="p-3"><?= "$orders[game]"; ?></td>
                            <td class="p-3"><?= "$orders[order_date]"; ?></td>
                            <td class="p-3"><?= "$orders[total_price]"; ?> Rupiah</td>
                        </tr>
                <?php 
                    } 
                ?>
         </tbody>
     </table>
     <div class="row d-flex justify-content-center">
     <a href="../print.php" class="bg-primary rounded shadow fw-bold text-white p-2 m-2 text-decoration-none" style="width: 100px"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
  <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1"/>
  <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1"/>
</svg>  PRINT</a>
     </div>
        </div>
    </div>
</div>


<!-- Footer Added -->
<?php 
    include ('includes/footer.php');
 ?>


</body>
</html>