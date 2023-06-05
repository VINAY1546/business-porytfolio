<?php
include 'dbcon.php';
if(!$con){
	die('Could not Connect My Sql:');
 }
 ECHO"EMPLOYEE DETAILS:";

	  $sql = "select* from rating";
      
      $que= mysqli_query($con,$sql);


    echo "<table border='1'> <tr><th>employee name</th>
    <th>employee rating</th>
    </tr>";
    //while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)){
      while ($result=mysqli_fetch_assoc($que)) {
       
        echo "<tr> <td>" . $result['emp_name']. "</td><td>" . $result['emp_rating']. "</td></tr><br>";
        
    }

    echo"</table>";
    

    echo "<br>";
    ?>