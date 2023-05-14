<html>
 <head>
    <title> DISPLAY</title>
    <style>
    body {
        background: #D071f9;
    }
    table{
         background-color: white;
    }
</style>
</head>









<?php
include 'config.php';
/*
include 'config.php';

error_reporting(0);

session_start();
$sql = "select * from hosteldetails";
$result = mysqli_quey($conn,$sql);
$total = mysqli_num_rows($result);
echo $total;
if($total !=0){
    echo "table has records";
}else{
    echo "No records found";
}

?>

$query = "SELECT * FROM hosteldetails";
		$result = mysqli_query($conn, $query);
		
			//$result = mysqli_query($conn, $sql);
			$total = mysqli_num_rows($result);
          
echo $total;
if($total !=0){
    
    echo "table has records";
}else{
    echo "No records found";
}
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$hostelid = "";
				$roomid = "";
                $studentname = "";
				$capacity = "";
				$_POST['hostelid'] = "";
				$_POST['roomid'] = "";
                $_POST['studentname'] = "";
				$_POST['capacity'] = "";
        
  */
  
  
// Connecting to the Database
/*$servername = "localhost";
$username = "root";
$password = "";
$database = "";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}*/

$sql = "SELECT * FROM edit";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);
echo '<span style="font-size: 20px; color: #006400; font-weight: bold;"></span> ' .$num;
echo " <br>records found in the DataBase Hostel Mangaement System in STUDENT  Details<br>";
// Display the rows returned by the sql query


if($num> 0){
    ?>
    <h2 align ="center"><mark>EDIT STUDENT Details from database</mark></h2>

   <center><table border = "3"  cellspacing = "4"  width = "85">
        <tr>
        <th  width = "2%"> ID   </th>
        <th  width = "2%"> USER_NAME   </th>
        <th  width = "2%"> EMAIL    </th>
        <th  width = "2%"> PASSWORD</th>
       
        <th  width = "2%"> FATHER_NAME    </th>
        <th  width = "2%"> ADDRESS    </th>   
        <th  width = "2%"> OPERATIONS   </th> 
        </tr>
   <?php
    while($row = mysqli_fetch_assoc($result)){
        // echo var_dump($row);
        echo "<tr>
              <td>".$row['id']."</td>
              <td>".$row['username']."</td>
              <td>".$row['email']."  </td>
              <td>".$row['password']."  </td>
             
              <td> ".$row['fathername']." </td>
              <td> ".$row['address']." </td>
              
              <td><a href='edit.php?id=$row[id]&username=$row[username]&em=$row[email]&password=$row[password]&fathername=$row[fathername]&address=$row[address] '>UPDATE</a></td>
              </tr>
              ";
        
    }


}

?>
</table>
</center>