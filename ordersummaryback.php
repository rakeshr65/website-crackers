 
 
<?php
							$loc=$_SERVER['PHP_SELF'];

							$locat=basename($_SERVER['PHP_SELF']);
						?>
 <?php
// Handle the order submission
$orderSummary = [];
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['orderData'])) {
    $orderSummary = json_decode($_POST['orderData'], true);
}

include "head.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crackrs website</title>


    <style>
      table{
        width: 100%;
      }
      th td{
        padding: 20px;
      }
    </style>
</head>
<body>
    <div>
<h1>order summary </h1>
 <!-- Order Summary -->
 <?php if (!empty($orderSummary)): ?>
     
      <form method="post" action="send_order.php">
      <table border="2px solid">
        <thead>
          <tr>
            <th>Product Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total Price</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($orderSummary as $index => $item): ?>
        
            <tr>
          <td>
            <input type="text" name="order[<?= $index ?>][name]" value="<?= htmlspecialchars($item['name']) ?>" readonly>
          </td>
          <td>
            <input type="number" name="order[<?= $index ?>][price]" value="<?= htmlspecialchars($item['price']) ?>" readonly>
          </td>
          <td>
            <input type="number" name="order[<?= $index ?>][quantity]" value="<?= htmlspecialchars($item['quantity']) ?>">
          </td>
          <td>
            <input type="number" name="order[<?= $index ?>][totalPrice]" value="<?= htmlspecialchars($item['totalPrice']) ?>" readonly>
          </td>
        </tr>
        
          <?php endforeach; ?>
          <?php endif; ?>
        </tbody>
      </table>

      <button type="submit" name="Submit"  value="<?php echo $loc; ?>">Submit</button>

      </form>

    </div>
      <script src="js\tableautoread.js" defer></script>
      </body>
      </html>
   