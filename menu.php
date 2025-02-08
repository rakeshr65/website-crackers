<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="chennai's no.1 crackers retail and whole sale store by giving best quality crackers and fireworks to the valuable customers"> 
	<link rel="stylesheet" href="css/menuphp.css"> 
<style>


	@media (max-width: 768px) {
		.navbar-toggle{
      display: block;
    }
  
    .main-drop-list {
      display: none;
      flex-direction: column;
      position: absolute;
      top: 60px;
      right: 20px;
      background-color: #333;
      width: 200px;
      border-radius: 5px;
    }
  
    .main-drop-list.show {
      display: flex;
    }
  
    .main-drop-list li {
      margin: 10px 0;
    }
  }

  .header-navbar{
    display: flex;
    align-items: center;
 place-content: center;
 
  }

  .collape-navbar{
    justify-content: space-between;
  }

  .main-drop-list{
    position: relative;
    left: 30px;
  }
 
  ul .dropdown-list a{

    padding: 50px;
  }
</style>
</head>
<body>
<div class="navbar main-nav-bar">
	<div class="header-navbar" >

		<button type="button" class="navbar-toggle" id="menu-toggle" data-toggle="collapse" data-target="#myNavbar">


			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<div class="collape-navbar" >
			<ul class="main-drop-list" id="nav-links">
			    <li><a href="index.php"> <i class="fa fa-home home"></i></a></li>

			<!-- <li class="dropdown-list"><a class="ancher-empty"><span class=""></span></a> -->
				<li class="dropdown-list"><a href="product.php">Products</a></li>
				<li class="dropdown-list"><a href="about.php" class="ancher-empty">About US</a></li>
				<li class="dropdown-list"><a href="safetytips.php" class="ancher-empty">Safety Tips</a></li>
				<li class="dropdown-list"><a href="contact.php" class="ancher-empty">Contact US</a></li>
                        
		</div>
	</div>
</div>
<script>
	const menuToggle = document.getElementById("menu-toggle");
    const navLinks = document.getElementById("nav-links");
    
    menuToggle.addEventListener("click", () => {
      navLinks.classList.toggle("show");
    });
</script>
</body>
</html>