
<?php
include "head.php";
?>
		<?php
				$loc=$_SERVER['PHP_SELF'];

				$locat=basename($_SERVER['PHP_SELF']);
						?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crackers website</title>
    
<style>
    /* Global Styles */

*{
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  font-family: Georgia, 'Times New Roman', Times, serif;
  /* font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"; */
}

body {
  line-height: 1.6;
  color: #333;
  background-color:rgb(255, 255, 255);
}
.table-container {
    width: 100%;
    overflow-x: auto; /* Horizontal scrolling for small screens */
    margin: 10px 0;
  }

  table {
    width: 100%;
    border-collapse: collapse;
    background:#FFFFFF;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    font-size: 16px;
  }
 
  thead {
    background-color: #ED3237;
    color: #fff;
    font-size: 18px;
    text-transform: capitalize;
  }
  td{
    color: #400000;
    font-family: 'Times New Roman', Times, serif;
    font-size: 18px;
  }

  th {
    width: max-content;
    padding: 10px;
    text-align: center;
    justify-content: center;
    align-items: space-evenly;
    white-space: nowrap; /* Prevent header text from wrapping */

  }
  
  tbody tr:last-child td {
    border-bottom: 3px solid #333;

  }
  
.cracker-heading{
  font-size: 16px;
  background-color: #8D6293;
  color:rgba(255, 253, 251, 0.97);
}
  .prod-img{
    width: 70px;
    height: auto;
    margin: auto;
  }
.productbanner{
  width:100%;
}

.productbanner img{
  width:1000px;
  height: auto;
  margin-top: -10px;
  margin-bottom: 10px;
}

.productbanner img:hover{
  cursor: pointer;
  -ms-transform: scale(1.0); /* IE 9 */
  -webkit-transform: scale(1.1); /* Safari 3-8 */
  transform: scale(1.1); 
  transition: transform 0.5s ease, box-shadow 0.5s ease;
}

h2, h3 {
      text-align: center;
}

table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
  }

th, td {
      border: 1px solid #ddd;
      padding: 10px;
      text-align: center;
  }

    input{
      border-radius: 5px solid;
      text-align: center;
      padding: 5px;
    }

    input[type="number"] {
      border: 8px;
      width: 90px;
      padding: 5px;
      text-align: center;
    }
  .popup button{
    width: 200px;
    height: 40px;
    margin: auto;
  }

    .btn {
      display: block;
      width: 200px;
      margin: 20px auto;
      padding: 10px 20px;
      background-color:#DC4950;
      color: white;
      text-align: center;
      text-decoration: none;
      border-radius: 5px;
      font-weight: bold;
      cursor: pointer;
    }
    .btn:hover {
      color: #fff;
      background-color:#D2151E;
    }
    .product-name{
      width: 100%;
      font-size: 18px;
      text-transform: capitalize;
        text-decoration: none;
        border: 0px;
    }

    #grandTotalDisplay{
      font-size: 24px;
      
    }
.total-display{
  font-size: 16px ;
  font-family:'Times New Roman', Times, serif;
}
    .total-display, .order-summary {
      text-align: center;
      font-size: 1.2rem;
      font-weight: bold;
      margin-top: 20px;
    }

    .hidden {
  display: none;
}
.popup.hidden {
display: none;
}
.close {
position: absolute;
top: 10px;
right: 10px;
font-size: 20px;
font-weight: bold;
color: #333;
cursor: pointer;
}
.close:hover {
color: #FF0000;
}

.popup {
width: 600px;
height: 400px;
  display: none;
  position: fixed;
  top: 50%;
 left: 35%;
  transform: translate(-50%, -50%);
  background: rgb(255, 252, 252);
  padding: 20px;
  border-radius: 8px;
  /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); */

}
#oderForm input{
  background-color: #ddd !important;
}
.popup h3 {
  margin-top: 0;
}

.popup input, .popup textarea {
  width: 100%;
  background-color: #ddd !important;
  margin-bottom: 10px;
  padding: 10px;
  text-align: left;
  border: 1px solid #ddd;
  border-radius: 4px;
  color: #fff;
  font-size: 16px;
  font-weight: 400;
}

.overlay {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 1000px;
  height: 100%;
  /* background-color: rgba(0, 0, 0, 0.5);
  z-index: 999; */
}

.modal {
    display: none; /* Hidden by default */
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.8); /* Black with transparency */
    justify-content: center;
    align-items: center;
  }
  
  /* Modal content (zoomed image) */
  .modal-content {
    max-width: 90%;
    max-height: 90%;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
  }
  
  /* Close button */
  .close {
    position: absolute;
    top: 20px;
    right: 20px;
    font-size: 30px;
    color: white;
    font-weight: bold;
    cursor: pointer;
  }
  
  .close:hover {
    color: red;
  }

.subTitle{
  background-color: #04AA6D;
  font-size: 18px;
      text-transform: capitalize;
        text-decoration: none;
        border: 0px;
 justify-content: space-evenly;
  color: #fff;
}
input
th.packet{
  width: 15%;
  color: #FFFFFF;
}
.packet{
  width: 60%;
  font-size: 18px;
  text-decoration: none;
  border :0px ;
  text-transform: capitalize;
  color: #400000;
  
}

@media only screen and (max-width: 768px) {
  /* For tablets and smaller screens */
  .productbanner img{
    width: 90%;
  }
}

@media only screen and (max-width: 480px) {
  /* For mobile phones and smaller screens */
  .productbanner img{
    width: 80%;
  }
}

@media only screen and (max-width: 320px) {
  /* For very small mobile screens */
  .productbanner img{
    width: 70%;
  }
}

@media only screen and (max-width: 768px) {
  /* For tablets and smaller screens */
 
}

@media only screen and (max-width: 480px) {
  /* For mobile phones and smaller screens */
  
}

@media only screen and (max-width: 320px) {
  /* For very small mobile screens */
}


</style>
</head>
<body>
  <div class="productbanner">
    <img src="crackersimages/diwaliproductbanner.webp" alt="product banner">
  </div>
  <div class="table-container"> 
  <form id="productForm"  >
      <table>
        <thead>
          <tr>
            <th>Image</th>
    <th>product name</th>
    <th class="packet">Content</th>
    <th>price </th>
    <th >Quantity</th>
    <th>total</th>
          </tr>
        </thead>
        <tbody>
     
          <?php
          // Example product list
          $products = [
            ["image"=>"crackersimages/crackers-2.jpg","name" => "23/4 KURVI ELEPHANT", "price" => 9.33,"packet" => "1 Pkt", "quantity" => 0,"batch"=>"Single Sound Crackers"],
            ["image"=>"crackersimages/Ground-Chakkars-1.png","name" => "3 1/2'LAKSHMI CRACKERS(10pkt)", "price" => 165,"packet" => "1 bundle", "quantity" => 0,"batch"=>"Single Sound Crackers"],
            ["image"=>"","name" => "4 LAKSHMI CRACKERS(10pkt)", "price" => 225,"packet" => "1 bundle", "quantity" => 0,"batch"=>"Single Sound Crackers" ],
            ["image"=>"","name" => "4 DELUXE LAKSHMI moorty(10pkt)", "price" => 265,"packet" => "1 bundle", "quantity" => 0,"batch"=>"Single Sound Crackers" ],
            ["image"=>"","name" => "4 DELUXE LAKSHMI moorty(10pkt)", "price" => 265,"packet" => "1 bundle", "quantity" => 0,"batch"=>"Single Sound Crackers" ],
            ["image"=>"","name" => "4 DELUXE LAKSHMI GOLD ELEPHANTS(5 Pkt)", "price" => 235,"packet" => "1 bundle", "quantity" => 0,"batch"=>"Single Sound Crackers" ],
            ["image"=>"","name" => "23/4 'kurvi (1pkt) OFFER", "price" => 9.33,"packet" => "1 bundle", "quantity" => 0,"batch"=>"Single Flash Limited Offer" ],
            ["image"=>"","name" => "4' Lakshmi(10pkt) OFFER", "price" => 165,"packet" => "1 bundle", "quantity" => 0,"batch"=>"Single Flash Limited Offer" ],
            ["image"=>"","name" => "4' Deluxe Lakshmi gold (10pkt) OFFER", "price" => 280,"packet" => "1 bundle", "quantity" => 0,"batch"=>"Single Flash Limited Offer" ],
            ["image"=>"","name" => "Digital Bomb", "price" => 233.33,"packet" => "1 box", "quantity" => 0,"batch"=>"Atom Bomb" ],
            ["image"=>"","name" => "Chakker Big offer all company", "price" => 26,"packet" => "1 box", "quantity" => 0,"batch"=>"Offer Price Chakkaras" ],
            ["image"=>"","name" => "Chakker Special offer all company", "price" => 51,"packet" => "1 box", "quantity" => 0,"batch"=>"Offer Price Chakkaras" ],
            ["image"=>"","name" => "chakkar deluxe offer all company", "price" => 90,"packet" => "1 box", "quantity" => 0,"batch"=>"Offer Price Chakkaras" ],
            ["image"=>"","name" => "Ground Chakker Big elephant brand", "price" => 46.67,"packet" => "1 box", "quantity" => 0,"batch"=>"Ground Chakkaras ELEPHANT BRAND" ],
            ["image"=>"","name" => "Ground Chakker Big(25pcs elephant brand)", "price" => 105,"packet" => "1 box", "quantity" => 0,"batch"=>"Ground Chakkaras ELEPHANT BRAND" ],
            ["image"=>"","name" => "Ground Chakker Special elephant brand", "price" => 80,"packet" => "1 box", "quantity" => 0,"batch"=>"Ground Chakkaras ELEPHANT BRAND" ],
            ["image"=>"","name" => "Ground Chakker Deluxe elephant brand", "price" => 140,"packet" => "1 box", "quantity" => 0,"batch"=>"Ground Chakkaras ELEPHANT BRAND" ], 
            
          ];
          // SORT BY ALPHABETICAL ORDER
        //   usort($products, function ($a, $b) {
        //     return strcmp($a["batch"] ?? '', $b["batch"] ?? '');
        // });
        
        $currentBatch = null;
          foreach ($products as $index => $product):
            if (!isset($product["batch"])) {
              continue; // Skip products with no batch
          }
          if ($product["batch"] !== $currentBatch): 
              $currentBatch = $product["batch"]; 
      ?>
          <!-- Batch heading inside the table -->
          <tr class="batch-row">
              <td colspan="6" class="subTitle"><?= htmlspecialchars($currentBatch) ?></td>
          </tr>
          <?php endif; ?>
         
            <tr>
              
            <td><img src='<?= htmlspecialchars($product['image']) ?>' alt='<?= htmlspecialchars($product['image']) ?>' onclick="openImage(this)" width='10px' class='prod-img' height='auto'>
          </td>

              <td>
                <input type="text" name="products[<?= $index ?>][name]" class="product-name" value="<?= htmlspecialchars($product['name']) ?>" readonly>
              </td>
              <td>
                <input type="text" name="products[<?= $index ?>][packet]" class="packet" value="<?= htmlspecialchars($product['packet']) ?>" readonly>
              </td>
              <td>
                <input type="number" name="products[<?= $index ?>][price]" value="<?= htmlspecialchars($product['price']) ?>" readonly>
              </td>
              <td>
                <input type="number" name="products[<?= $index ?>][quantity]" value="0" min="0" oninput="updateRowTotal(this, <?= $index ?>)">
              </td>
              <td>
                <input type="number" name="products[<?= $index ?>][total-price]" value="0" readonly class="total-price" id="total-<?= $index ?>">
              </td>
             
            </tr>
            <?php endforeach; ?>
        </tbody>
      </table>
      <button type="button" id="checkorder"class="btn" onclick="displaySelectedProducts()">Check Order</button>
     
     <!-- view Full image-->
      <div id="imageModal" class="modal">
    <span class="close" onclick="closeImage()">&times;</span>
    <img id="modalImage" class="modal-content" alt="Zoomed Image">
  </div>

<!-- Check the purchased crackers details  -->
      <div id="orderSummary" class="hidden">
        <h3>Order Summary</h3>
        <table id="selectedProductsTable">
          <thead>
            <tr>
              <th>Product Name</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Total Price</th>
            </tr>
          </thead>
          <tbody>
            <!-- Selected products will be inserted here -->
           
      
          </tbody>
          
        </table>
        <div class="total-display" id="grandTotalDisplay">
        </div>
        </form>
  </div>
        <button  class="btn hidden" onclick="openPopup()" id="placeorder">Place Order</button> 
     
        
     
 
    <!-- Popup for user details -->
  <div class="overlay" id="overlay"></div>
  <div class="popup" id="popup">
  <span id="closePopup" class="close">&times;</span>
    <h3>Enter Your Details</h3>
    <form id="orderForm" onsubmit="submitOrder(event)">
      <input type="email" id="userEmail" placeholder="Email" required>
      <input type="tel" id="userPhone" placeholder="Phone Number" maxlength="10" required>
      <textarea id="userAddress" placeholder="Address" rows="3" required></textarea>
      <input type="tel" id="userPincode" maxlength="6" placeholder="Pincode" required>
      <button type="submit" class="btn">Submit Order</button>
    </form>
  </div>
  </div>

  <script>

    const checkorder= document.getElementById('checkorder');
    const placeorder= document.getElementById('placeorder');

    checkorder.addEventListener('click',()=>{
      placeorder.classList.remove('hidden');
    });

    // Function to update the total price for a single row
    function updateRowTotal(quantityInput, index) {
      const quantity = parseFloat(quantityInput.value) || 0;
      const price = parseFloat(document.getElementsByName(`products[${index}][price]`)[0].value) || 0;
      const total = quantity * price;

      // Update the total price for the row
      document.getElementById(`total-${index}`).value = total.toFixed(2);
    }

    // Function to display selected products and calculate grand total
    function displaySelectedProducts() {
      const orderSummary = document.getElementById('orderSummary');
      const tableBody = document.getElementById('selectedProductsTable').querySelector('tbody');
      const totalInputs = document.querySelectorAll('.total-price');
      let grandTotal = 0;

      // Clear existing table rows
      tableBody.innerHTML = '';

      totalInputs.forEach((input, index) => {
        const total = parseFloat(input.value) || 0;
        if (total > 0) {
          // Get product details
          const name = document.getElementsByName(`products[${index}][name]`)[0].value;
          const price = document.getElementsByName(`products[${index}][price]`)[0].value;
          const quantity = document.getElementsByName(`products[${index}][quantity]`)[0].value;

          // Add to the grand total
          grandTotal += total;

          // Create a new row for the selected product
          const row = document.createElement('tr');
          row.innerHTML = `
            <td>${name}</td>
            <td>${price}</td>
            <td>${quantity}</td>
            <td>${total.toFixed(2)}</td>
          `;
          tableBody.appendChild(row);
        }
      });


      // Update the grand total
      document.getElementById('grandTotalDisplay').textContent = `Total Price: RS.${grandTotal.toFixed(2)}`;
      document.getElementById('grandTotalDisplay').textContent = `Total Price: RS.${grandTotal.toFixed(2)}`;

      // Show the order summary
      orderSummary.classList.remove('hidden');
    }


    function openPopup() {
      document.getElementById('popup').style.display = 'block';
      document.getElementById('overlay').style.display = 'block';
    }

    // Close the popup form
    

    // Handle form submission
    function submitOrder(event) {
      event.preventDefault();

      // Get user input
      const userEmail = document.getElementById('userEmail').value;
      const userPhone = document.getElementById('userPhone').value;
      const userAddress = document.getElementById('userAddress').value;
      const userPincode = document.getElementById('userPincode').value;

      // Get selected products from the table
      const selectedProductsTable = document.getElementById('selectedProductsTable');
      const rows = selectedProductsTable.querySelectorAll('tbody tr');
      const selectedProducts = [];

      rows.forEach(row => {
        const productName = row.cells[0].textContent;
        const price = row.cells[1].textContent;
        const quantity = row.cells[2].textContent;
        const totalPrice = row.cells[3].textContent;

        selectedProducts.push({ productName, price, quantity, totalPrice });
      });

      // Send order details to the server using fetch
      fetch('processorder.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify({
          userEmail,
          userPhone,
          userAddress,
          userPincode,
          selectedProducts,
        }),
      })
        .then(response => response.text())
        .then(data => {
          alert('Order placed successfully!\n' + data);
          closePopup();
        })
        .catch(error => {
          console.error('Error:', error);
          alert('Failed to place the order.');
        });
    }

    const closePopupButton = document.getElementById('closePopup');

closePopupButton.addEventListener('click', () => {
popup.classList.add('hidden');
// popup.classList.display('none');
popup.close.display='none';
// window.location.assign("http://localhost/caddschoolcrackers/product.php")

});

// Optional: Close popup when clicking outside the popup content
popup.addEventListener('click', (event) => {
if (event.target === popup) {
popup.classList.add('hidden');

}
});

// view  Full image script 

// Open the modal and display the clicked image
function openImage(imgElement) {
  const modal = document.getElementById('imageModal');
  const modalImage = document.getElementById('modalImage');

  // Set the modal image source to the clicked image's source
  modalImage.src = imgElement.src;

  // Show the modal
  modal.style.display = 'flex';
}

// Close the modal
function closeImage() {
  const modal = document.getElementById('imageModal');

  // Hide the modal
  modal.style.display = 'none';
}


  </script>
  </div>
</body>
</html>


<?php include "footer.php";?>