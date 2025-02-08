<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["userName"];
    $email = $_POST['userEmail'];
    $phone = $_POST['userPhone'];
    $address1 = $_POST['userAddress1'];
    $address2 = $_POST['userAddress2'];
    $address3 = $_POST['userAddress3'];
    $pincode = $_POST['userPincode'];
    $products = json_decode($_POST['products'], true);

    // Database connection
    $conn = new mysqli("localhost", "root", "root", "crackers");
    if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

    // Insert customer details
    $stmt = $conn->prepare("INSERT INTO customers (name, email, phone, address1, address2, address3, pincode, selectedProducts) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssisssis", $name, $email, $phone, $address1, $address2,$address3, $pincode, $products);
    $stmt->execute();
    $customer_id = $stmt->insert_id;
    $stmt->close();

   
    $stmt = $conn->prepare("INSERT INTO orders (customer_id, total_price) VALUES (?, ?)");
    $stmt->bind_param("id", $customer_id, $total_price);
    $stmt->execute();
    $order_id = $stmt->insert_id;
    

    //Insert each purchased product
    $stmt = $conn->prepare("INSERT INTO order_items (product_id, order_id, product_name, price, quantity, total_price) VALUES (?,?, ?, ?, ?, ?)");
    foreach ($products as $product) {
       
        $product_id=$product['id'];

        $stmt->bind_param("iisddd",$product_id, $order_id, $product['name'], $product['price'], $product['quantity'], $product['total']);
            $stmt->execute();  
        $price = $product['price'];
        $quantity=$product['quantity'];
            $total = $price * $quantity;
            $total_price += $total;

            $stockCheck = $conn->query("SELECT stock FROM product WHERE id = $product_id");
            $row = $stockCheck->fetch_assoc();
    
            $conn->query("UPDATE product SET stock = stock - $quantity WHERE id = $product_id");
             
    }   
  
    //Insert order details
    $conn->query("UPDATE orders SET total_price = $total_price WHERE id = $order_id");


    echo "<script>
    alert('Order placed successfully!!!!!!!!!!!!!!!!!!!!');
    </script>";
    $stmt->close();

    
 
    $stmt->close();
    $conn->close();

    // Send Email Notification
    // $to = "owner@example.com";
    // $subject = "New Order Received";
    // $message = "A new order has been placed by $email.\n\nOrder Details:\n";
    // foreach ($products as $product) {
    //     $message .= "{$product['name']} - {$product['quantity']} x {$product['price']} = {$product['total']}\n";
    // }
    // $message .= "\nCustomer Details:\nPhone: $phone\nAddress: $address, $pincode";
    // mail($to, $subject, $message, "From: no-reply@example.com");

}
?>
