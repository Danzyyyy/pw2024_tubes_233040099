<?php
$orders = query("SELECT * FROM orders");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    </head>
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
        </div>
    </div>
</div>
</body>
</html>