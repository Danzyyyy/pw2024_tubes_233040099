<?php
require 'functions.php';
require_once __DIR__ . '/vendor/autoload.php';
$html = '
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/print.css">
  </head>
  <body>
<table>
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
         <tbody>';

                    $sql= 'SELECT * FROM orders where status ="confirm"';
                    $result = mysqli_query($conn, $sql); 

                        while ($orders = mysqli_fetch_array($result)) {
$html .= '<tr>
                            <td>' . $orders["id"] . '</td>
                            <td>' . $orders["customer_name"] . '</td>
                            <td>' . $orders["customer_email"] . '</td>
                            <td>' . $orders["customer_address"] . '</td>
                            <td>0' . $orders["customer_phone"] . '</td>
                            <td>' . $orders["game"] . '</td>
                            <td>' . $orders["order_date"] . '</td>
                            <td>' . $orders["total_price"] . ' Rupiah</td>
                        </tr>'; 
                        
                    } 
$html .= '
         </tbody>
     </table>
     </body>';
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output();