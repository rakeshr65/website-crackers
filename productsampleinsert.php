<?php
include "db.connection.php";
$sql = "SELECT id, name, price, uom, batch, image FROM product";
$result = $conn->query($sql);

$products = [];

if ($result->num_rows > 0) {
    // Output data of each row as an associative array
    while($row = $result->fetch_assoc()) {
        $products[] = $row;  // Add each row to the $products array
    }
} else {
    echo "0 results";
}

$conn->close();

// Now you can use the $products array
// print_r($products);
?>
