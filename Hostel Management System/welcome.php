<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>

    <link rel="stylesheet" type="text/css" href="style.css">


</head>

<body>

           <?php echo '<ul>';
            echo' ';
            ?>

    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>";?>


           <?php echo '<ul>';
            echo' ';
            ?>
     
      <?php  echo '<ul>';
      echo '<li><button name="Logout" class="btn"><a href="logout.php">Logout</a></button></li>';
    echo'</ul>';?>
    



    <!--<a href="hotel book.html">Hostel Registration </a><br/>-->

    <li><button name="Home Page" class="btn"><a href="index.html">HOME PAGE</a><br/></button></li>

</body>
</html>