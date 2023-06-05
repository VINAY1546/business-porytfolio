<?php
include 'dbcon.php';
if(!$con){
	die('Could not Connect My Sql:');
 }
	 
	$c = $_POST['pd'];
	$d = $_POST['ps'];
	$e = $_POST['empy'];
	$f = $_POST['empd'];
	  $sql = "insert into status(pn,pl,ps,pr) values('$c','$d','$e','$f')";
	  $res=mysqli_query($con,$sql);
	  if ($res)
     
		 echo "New record created successfully !";
	   else 
		 echo "Error: " . $sql . "  " . mysqli_error($con);

		 echo"<br>";

		 ECHO"PROJECTS STATUS:";

	  $sql = "select* from status";
      //$query = mysqli_query($sql, $con);
      //$sql = "SELECT id, firstname, lastname FROM MyGuests";
      $que= mysqli_query($con,$sql);

//if ($result->num_rows > 0) {
    // output data of each row
    echo "<table border='1'> <tr> <th>project id </th> <th>project name</th>
    <th>project lead</th>
    <th>project status</th>
    <th>project rating</th>
  
    </tr>";
    //while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)){
      while ($result=mysqli_fetch_assoc($que)) {
       
        echo "<tr> <td>" . $result['pid']. "</td><td>" . $result['pn']. "</td><td>". $result['pl']."</td><td>" . $result['ps']. "</td><td>". $result['pr']."</td></tr><br>";
        
    }

    echo"</table>";
    

    echo "<br>";
	
  ?>