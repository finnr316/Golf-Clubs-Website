<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="description" content="Second hand golf clubs">
  <meta name="keywords" content="Golf, HTML">
  <meta name="author" content="Finn Ryan">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>North Berwick Second Hand Golf Clubs</title>
  <link href="Clubs.css" rel="stylesheet" type="text/css" />
</head>

<!-- login/signup-->

<header>
  <img src="../Images/LogoWhite.png" id="logo">
  <button class="button"><a href="login.php">Login/Signup</a></button>
</header>

<body>
  <div id="heading">
    <div class="head1">
      <h1><i>Golf Gallery</i></h1>
    </div>

   <!-- nav bar with club choices -->
   <nav>
      <ul>
        <li><a href="../home.php"><b>Home</b></a></li>
        <li><a href="driver.php"><b>Drivers</b></a></li>
        <li><a href="woods.php"><b>Woods</b></a></li>
        <li><a href="irons.php"><b>Iron Sets</b></a></li>
        <li><a href="wedges.php"><b>Wedges</b></a></li>
        <li><a href="putters.php"><b>Putters</b></a></li>
      </ul>
    </nav>
  </div>

  <div class="clubSection">
    <h2 class="clubTitle"><i>Drivers</i></h2>
    <?php
    //connect to database
    $conn = mysqli_connect('localhost', 'root', '', 'golf clubs');
    $server = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'golf clubs';

    $connection = mysqli_connect($server, $user, $password, $database);
    // check connection
    if(mysqli_connect_errno()){
      echo 'Connection error: ' . mysqli_connect_error();
    }

    $querystring = "SELECT * FROM clubs_table WHERE Club_Type = 'Driver'";
    $result = mysqli_query($connection, $querystring);
    if (mysqli_num_rows($result) == 0){
      echo "<p>No results found</p>";
    }
    else{
      echo "<table border=1>";
      while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
        echo "<tr>";
        echo "<td>";
        echo $row['Brand'];
        echo "</td>";
        echo "<td>";
        echo $row['Model'];
        echo "</td>";
        echo "<td>";
        echo $row['Flex'];
        echo "</td>";
        echo "<td>";
        echo $row['Dexterity'];
        echo "</td>";
        echo "<td>";
        echo $row['Price'];
        echo "</td>";
        echo "</tr>";
      }
      echo "</table>";
    mysqli_close($connection);
    }


  ?>

  </div>