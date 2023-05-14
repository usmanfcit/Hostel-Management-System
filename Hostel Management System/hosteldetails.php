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

$sql = "SELECT * FROM hosteldetails";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);
echo '<span style="font-size: 20px; color: #006400; font-weight: bold;"></span> ' .$num;
echo " <br>records found in the DataBase Hostel Mangaement System in Hostel Detals<br>";
// Display the rows returned by the sql query


if($num> 0){
    ?>
    <h2 align ="center"><mark>Displaying hostel details from database</mark></h2>

   <center><table border = "3"  cellspacing = "4"  width = "85">
        <tr>
        <th  width = "2%"> HOSTEL_ID   </th>
        <th  width = "2%"> ROOM_ID     </th>
        <th  width = "2%"> STUDENT NAME</th>
        <th  width = "2%"> CAPACITY    </th>
          
        </tr>
       
   <?php
    while($row = mysqli_fetch_assoc($result)){
        // echo var_dump($row);
        echo "<tr>
              <td>".$row['hostelid']."</td>
              <td>".$row['roomid']."  </td>
              <td> ".$row['studentname']." </td>
              <td> ".$row['capacity']." </td>
              
            
              </tr>
              ";
             
    }
    
    

}

?>
 

</table>
</center>

<?php
include 'config.php';

$sql = "SELECT * FROM table5_details";
$result = mysqli_query($conn, $sql);
?> 
<h2 ><mark>******************************************************************************************************************</mark></h2>
<?php
// Find the number of records returned
$num = mysqli_num_rows($result);
echo '<span style="font-size: 20px; color: #006400; font-weight: bold;"></span> ' .$num;
echo " <br>records found in the DataBase Hostel Management System in Hostel Details<br>";
// Display the rows returned by the sql query


if($num> 0){
    ?>
    <h2 align ="center"><mark>Displaying 5th Table of hostel details from database</mark></h2>

   <center><table border = "3"  cellspacing = "4"  width = "85">
        <tr>
        <th  width = "2%"> ID_NO#   </th> 
        <th  width = "2%"> HOSTEL_NAME   </th>
        <th  width = "2%"> HOSTEL_TYPE     </th>
        <th  width = "2%"> HOSTEL_RENT</th>
         
        </tr>
   <?php
    while($row = mysqli_fetch_assoc($result)){
        // echo var_dump($row);
        echo "<tr>
              <td>".$row['id']."</td>
              <td>".$row['hostelname']."  </td>
              <td> ".$row['hosteltype']." </td>
              <td> ".$row['hostelrent']." </td>
              </tr>
              ";
        
    }


}

?>
</table>
</center>

<?php
include 'config.php';

$sql = "SELECT * FROM table6_details";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);
echo '<span style="font-size: 20px; color: #006400; font-weight: bold;"></span> ' .$num;
echo " <br>records found in the DataBase Hostel Management System in Hostel Details<br>";
// Display the rows returned by the sql query


if($num> 0){
    ?>
    <h2 align ="center"><mark>Displaying 6th Table hostel details from database</mark></h2>

   <center><table border = "3"  cellspacing = "4"  width = "85">
        <tr>
        <th  width = "2%"> ALOT_NO#   </th> 
        <th  width = "2%"> ALLOTEE_NAME   </th>
        <th  width = "2%"> ALLOTEE_EMAIL    </th>
        <th  width = "2%"> ALLOTEE_PHONE</th>
         
        </tr>
   <?php
    while($row = mysqli_fetch_assoc($result)){
        // echo var_dump($row);
        echo "<tr>
              <td>".$row['id']."</td>
              <td>".$row['allotee_name']."  </td>
              <td> ".$row['allotee_email']." </td>
              <td> ".$row['allotee_phone']." </td>
              </tr>
              ";
        
    }


}

?>
</table>
</center>

<?php
include 'config.php';

$sql = "SELECT * FROM table7_details";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);
echo '<span style="font-size: 20px; color: #006400; font-weight: bold;"></span> ' .$num;
echo " <br>records found in the DataBase Hostel Management System in Hostel Details<br>";
// Display the rows returned by the sql query


if($num> 0){
    ?>
    <h2 align ="center"><mark>Displaying 7th Table hostel details from database</mark></h2>

   <center><table border = "3"  cellspacing = "4"  width = "85">
        <tr>
        <th  width = "2%"> BUILDING_NUMBER#   </th> 
        <th  width = "2%"> ROOM_ID   </th>
        <th  width = "2%"> FURNITURE_ID    </th>
        <th  width = "2%"> CAPACITY OF_STUDENTS</th>
         
        </tr>
   <?php
    while($row = mysqli_fetch_assoc($result)){
        // echo var_dump($row);
        echo "<tr>
              <td>".$row['building_number']."</td>
              <td>".$row['room_id']."  </td>
              <td> ".$row['furniture_id']." </td>
              <td> ".$row['capacity_ofstudents']." </td>
              </tr>
              ";
        
    }


}

?>
</table>
</center>

<?php
include 'config.php';

$sql = "SELECT * FROM table8_details";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);
echo '<span style="font-size: 20px; color: #006400; font-weight: bold;"></span> ' .$num;
echo " <br>records found in the DataBase Hostel Management System in Hostel Details<br>";
// Display the rows returned by the sql query


if($num> 0){
    ?>
    <h2 align ="center"><mark>Displaying 8th Table of hostel details from database</mark></h2>

   <center><table border = "3"  cellspacing = "4"  width = "85">
        <tr>
        <th  width = "2%"> STAFF_ID#   </th> 
        <th  width = "2%"> STAFF_NAME  </th>
        <th  width = "2%"> STAFF_GENDER    </th>
        <th  width = "2%"> PHONE_NUMBER</th>
         
        </tr>
   <?php
    while($row = mysqli_fetch_assoc($result)){
        // echo var_dump($row);
        echo "<tr>
              <td>".$row['staff_id']."</td>
              <td>".$row['staff_name']."  </td>
              <td> ".$row['staff_gender']." </td>
              <td> ".$row['phone_number']." </td>
              </tr>
              ";
        
    }


}

?>
</table>
</center>

<?php
include 'config.php';

$sql = "SELECT * FROM table9_details";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);
echo '<span style="font-size: 20px; color: #006400; font-weight: bold;"></span> ' .$num;
echo " <br>records found in the DataBase Hostel Management System in Hostel Details MESS<br>";
// Display the rows returned by the sql query


if($num> 0){
    ?>
    <h2 align ="center"><mark>Displaying 9th Table of hostel details Mess from database</mark></h2>

   <center><table border = "3"  cellspacing = "4"  width = "85">
        <tr>
        <th  width = "2%"> MESS_ID#   </th> 
        <th  width = "2%"> CHEF_NAME  </th>
        <th  width = "2%"> MONTHLY_EXPENSE    </th>
        <th  width = "2%"> MESS_TIMINGS</th>
         
        </tr>
   <?php
    while($row = mysqli_fetch_assoc($result)){
        // echo var_dump($row);
        echo "<tr>
              <td>".$row['mess_id']."</td>
              <td>".$row['name']."  </td>
              <td> ".$row['monthly_expense']." </td>
              <td> ".$row['mess_timings']." </td>
              </tr>
              ";
        
    }


}

?>
</table>
</center>

<?php
include 'config.php';

$sql = "SELECT * FROM table10_details";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);
echo '<span style="font-size: 20px; color: #006400; font-weight: bold;"></span> ' .$num;
echo " <br>records found in the DataBase Hostel Management System in Hostel Details<br>";
// Display the rows returned by the sql query


if($num> 0){
    ?>
    <h2 align ="center"><mark>Displaying 10th Table of hostel details Visitor from database</mark></h2>

   <center><table border = "3"  cellspacing = "4"  width = "85">
        <tr>
        <th  width = "2%"> VISITOR_ID   </th> 
        <th  width = "2%"> VISITOR_NAME  </th>
        <th  width = "2%"> STUDENT_NAME   </th>
        <th  width = "2%"> TIME_IN</th>
        <th  width = "2%"> TIME_OUT</th>
         
        </tr>
   <?php
    while($row = mysqli_fetch_assoc($result)){
        // echo var_dump($row);
        echo "<tr>
              <td>".$row['visitor_id']."</td>
              <td>".$row['visitor_name']."  </td>
              <td> ".$row['student_name']." </td>
              <td> ".$row['time_in']." </td>
              <td> ".$row['time_out']." </td>
              </tr>
              ";
        
    }


}

?>
</table>
</center>










