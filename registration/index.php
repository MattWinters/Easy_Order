<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

<div id>
  <div class="header">
<<<<<<< HEAD
   <span class="w3-button w3-display-topright w3-large"><a style="text-decoration:none" href="..\HomePage.html">x</a></span>
=======
    <a href="..\HomePage.html"><span class="w3-button w3-display-topright w3-large">x</span></a>
>>>>>>> d2c4f5cf5bbe5840e46dd05d25dd2b60eb3e5bf8
  	<h2>Home Page</h2>
  </div>
  <div class="content">
    	<!-- notification message -->
    	<?php if (isset($_SESSION['success'])) : ?>
        <div class="error success" >
        	<h3>
            <?php 
            	echo $_SESSION['success']; 
            	unset($_SESSION['success']);
            ?>
        	</h3>
        </div>
    	<?php endif ?>

      <!-- logged in user information -->
      <?php  if (isset($_SESSION['username'])) : ?>
      	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
      	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
      <?php endif ?>
  </div>
</div>	
</body>
</html>