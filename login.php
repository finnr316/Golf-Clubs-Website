<?php 
  session_start();
?>

<?php
  if (isset($_POST['loginBTN'])) {
    $staffpass = $_POST["user_password"];
    $staffemail = $_POST["user_email"];
    if (empty($staffpass)) {
      include 'Home.html';
    } 
    else{
      if ($staffpass == "your_password" && $staffemail == "your_email@example.com") {
        $_SESSION['staffLogin']="True";
        header('Location: home_logged_in.html');
      }
      else{
        header('Location: home_logged_out.html');
      }
    }
  }
?>

<!DOCTYPE html>
<html>
	<?php
		//connect to database
		$conn = mysqli_connect('localhost', 'root', '', 'golf clubs');

		// check connection
		if(!$conn){
			echo 'Connection error: ' . mysqli_connect_error();
		}
	?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="LoginStyle.css" rel="stylesheet" type="text/css" />
</head>
<header>
	<img src="Images/LogoWhite.png" id="logo">
</header>

<body>
  <div id="heading">
    <div class="head1">
      <h1><i>Golf Gallery</i></h1>
    </div>


    <!-- nav bar with club choices -->
    <nav>
      <ul>
        <li><a href="home_logged_out.php"><b>Home</b></a></li>
        <li><a href="home_logged_out.php"><b>Drivers</b></a></li>
        <li><a href="home_logged_out.php"><b>Woods</b></a></li>
        <li><a href="home_logged_out.php"><b>Iron Sets</b></a></li>
        <li><a href="home_logged_out.php"><b>Wedges</b></a></li>
        <li><a href="home_logged_out.php"><b>Putters</b></a></li>
      </ul>
    </nav>
  </div>

  <div class="middle">
    <div class="center">
      <h1>Login</h1>
      <form method="post" action="login.php">
        <div class="txt_field">
          <input type="text" required name="user_email">
          <label>Email</label>
        </div>
        <div class="txt_field">
          <input type="password" required name="user_password">
          <label>password</label>
        </div>
        <div class="pass">Forgot Password?</div>
        <input type="submit" value="Login" name="loginBTN">
      </form>
    </div>
  </div>
  <script src="Loginscript.js"></script>
</html>
