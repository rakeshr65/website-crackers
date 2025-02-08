<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['order'])) {
    $orders = $_POST['order'];

    echo "<h2>Order Received from a customer </h2>";
    echo "<table border='1'>
            <thead>
              <tr>
                <th>Product Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total Price</th>
              </tr>
            </thead>
            <tbody>";
    foreach ($orders as $order) {
        echo "<tr>
                <td>" . htmlspecialchars($order['name']) . "</td>
                <td>" . htmlspecialchars($order['price']) . "</td>
                <td>" . htmlspecialchars($order['quantity']) . "</td>
                <td>" . htmlspecialchars($order['totalPrice']) . "</td>
              </tr>";
    }
    echo "</tbody></table>";
} else {
    echo "<p>No data submitted.</p>";
}



// if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['order'])) {
//     $orders = $_POST['order'];
	
	
// 	$to="infocaddschool@gmail.com";
// 	 $subject = "Contact Page enquiry caddschool.com";
	
// 	 $body = "
// 	 <html>
//     <h2>Crackers Order</h2>
//     <table border='1'>
//             <thead>
//               <tr>
//                 <th>Product Name</th>
//                 <th>Price</th>
//                 <th>Quantity</th>
//                 <th>Total Price</th>
//               </tr>
//             </thead>
//             <tbody>";
//     		foreach ($orders as $order) {
//          "<tr>
//                 <td>" . htmlspecialchars($order['name']) . "</td>
//                 <td>" . htmlspecialchars($order['price']) . "</td>
//                 <td>" . htmlspecialchars($order['quantity']) . "</td>
//                 <td>" . htmlspecialchars($order['totalPrice']) . "</td>
//               </tr>";
//     }
//     include "send_email.php"
// } else {
//     echo "<p>No data submitted.</p>";
// }


?>