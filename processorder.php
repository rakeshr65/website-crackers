<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the JSON data from the request body
    $data = json_decode(file_get_contents('php://input'), true);

    $userEmail = $data['userEmail'];
    $userPhone = $data['userPhone'];
    $userAddress1 = $data['userAddress1'];
    $userAddress2 = $data['userAddress2'];
    $userAddress3 = $data['userAddress3'];
    $userPincode = $data['userPincode'];
    $selectedProducts = $data['selectedProducts'];

    // Email Configuration
    $to = 'productowner@example.com'; // Product owner's email
    $subject = 'New Order Placed';
    $headers = "From: $userEmail\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

    // Build the email body
    $message = "A new order has been placed:\n\n";
    $message .= "User Details:\n";
    $message .= "Email: $userEmail\n";
    $message .= "Phone: $userPhone\n";
    $message .= "Address: $userAddress\n";
    $message .= "Pincode: $userPincode\n\n";
    $message .= "Products:\n";

    foreach ($selectedProducts as $product) {
        $message .= "{$product['productName']} - Quantity: {$product['quantity']}, Total Price: {$product['totalPrice']}\n";
    }
$body='
';
    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Order details sent to the product owner successfully.";
    } else {
        echo "Failed to send order details.";
    }
} else {
    http_response_code(405); // Method Not Allowed
    echo "Invalid request method.";
}
?>
