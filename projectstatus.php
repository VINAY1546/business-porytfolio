<?php
include 'dbcon.php';
if(!$con){
	die('Could not Connect My Sql:');
 }
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

    ECHO"COMPLETED PROJECTS:";

	  $sql = "select* from status where ps='COMPLETED'";
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
      while ($result1=mysqli_fetch_assoc($que)) {
       
        echo "<tr> <td>" . $result1['pid']. "</td><td>" . $result1['pn']. "</td><td>". $result1['pl']."</td><td>" . $result1['ps']. "</td><td>". $result1['pr']."</td></tr><br>";
        
    }

    echo"</table>";
    

    echo "<br>";

    ECHO"YET TO START PROJECTS:";

	  $sql = "select* from status where ps='YET TO START'";
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
      while ($result1=mysqli_fetch_assoc($que)) {
       
        echo "<tr> <td>" . $result1['pid']. "</td><td>" . $result1['pn']. "</td><td>". $result1['pl']."</td><td>" . $result1['ps']. "</td><td>". $result1['pr']."</td></tr><br>";
        
    }

    echo"</table>";
    

    echo "<br>";

    echo"</table>";
    

    echo "<br>";

    ECHO"ONGOING PROJECTS:";
	  $sql = "select* from status where ps='ONGOING'";
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
      while ($result1=mysqli_fetch_assoc($que)) {
       
        echo "<tr> <td>" . $result1['pid']. "</td><td>" . $result1['pn']. "</td><td>". $result1['pl']."</td><td>" . $result1['ps']. "</td><td>". $result1['pr']."</td></tr><br>";
        
    }

    echo"</table>";
    

    echo "<br>";
    ?>