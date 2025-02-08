
<?php include "head.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<style>
		*{
  font-family: Georgia, 'Times New Roman', Times, serif;
}

		.contactbanner:hover{
			cursor: pointer;
		-ms-transform: scale(1.0); /* IE 9 */
  -webkit-transform: scale(1.1); /* Safari 3-8 */
  transform: scale(1.1); 
  transition: transform 0.5s ease, box-shadow 0.5s ease;
		}


		.skyform{
			
		}
	</style>
</head>
<body>
	

	<div id="about">

	<img class="contactbanner" src="crackersimages/contactbanner.jpg" style="width: 1000px;height:250px">
		<div class="container-fluid">
		
			</div>
			
		</div>	
		<div class="container" style="margin-top: 40px;">
			<div class="col-md-3 col-sm-2">
			</div>
			<div class="col-md-6 col-sm-8" style="margin-top: 15px;">
				<form class="sky-form" method="post" style="margin-bottom: 15px;">
					<header style="text-align:center;">Contact US</header>
					<marquee><p class="maildropsection">Kindly drop a mail to know about more detail</p></marquee>
					<fieldset>					
						<section>
							<h2 class="hidden">input</h2>
							<label class="input">
								<i class="icon-append icon-user"></i>
								<input type="text" name="Name" placeholder="Name" required>
							</label>
						</section>
						
						<section>
							<h2 class="hidden">input</h2>
							<label class="input">
								<i class="icon-append icon-envelope-alt"></i>
								<input type="email" name="Email" placeholder="Email" required>
							</label>
						</section>
						
						<section>
							<h2 class="hidden">input</h2>
							<label class="input">
								<i class="icon-append icon-phone"></i>
								<input type="tel" name="Mobile" required
								maxlength="10" placeholder="e.g., 1234567890"  >
							</label>
						</section>
						
						<!-- <section>
							<h2 class="hidden">input</h2>
							<label class="input">
								<input type="text" name="Subject" placeholder="Subject">
							</label>
						</section> -->

						<section>
							<h2 class="hidden">input</h2>
							<label class="textarea">
								<textarea rows="3" name="Note"placeholder="kindly address your queries here:" required></textarea>
							</label>
						</section>

					</fieldset>
					<footer>
						<button type="submit" name="submit" value="submit" class="button">submit</button>
					</footer>
				</form>
			</div>	
		</div>
		<div class="col-md-3 col-sm-2">
		</div>	
	</div>
	</body>
</html>
	
<?php
// Include the database configuration
include('db.connection.php');



// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate form inputs
    $name = $conn->real_escape_string($_POST['Name']);
    $email = $conn->real_escape_string($_POST['Email']);
    $mobile = $conn->real_escape_string($_POST['Mobile']);
    $note = $conn->real_escape_string($_POST['Note']);
	
    // Insert data into database
    $sql = "INSERT INTO contactform (name, email, mobile, note) VALUES ('$name', '$email', '$mobile', '$note')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
		alert('New record created successfully')
		</script>";
		// include "send_email.php";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}

?>

	<?php include('footer.php'); ?>