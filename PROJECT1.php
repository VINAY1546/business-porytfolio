<?php
include 'dbcon.php';
if(!$con){
	die('Could not Connect My Sql:');
 }
 ECHO"ADDING PROJECTS PROJECTS:";

	  $sql = "select* from project";
      //$query = mysqli_query($sql, $con);
      //$sql = "SELECT id, firstname, lastname FROM MyGuests";
      $que= mysqli_query($con,$sql);

//if ($result->num_rows > 0) {
    // output data of each row
    echo "<table border='1'> <tr> <th>project id </th> <th>project name</th>
    <th>project duration</th>
    <th>project date of start</th>
    <th>project deadline</th>
  
    </tr>";
    //while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)){
      while ($result=mysqli_fetch_assoc($que)) {
       
        echo "<tr> <td>" . $result['project_id']. "</td><td>" . $result['project_name']. "</td><td>". $result['project_duration']."</td><td>" . $result['project_dateofstart']. "</td><td>". $result['projectline']."</td></tr><br>";
        
    }

    echo"</table>";
    

    echo "<br>";

    echo"ASSIGN PROJECTS";

    $sql = "select* from project1";
      //$query = mysqli_query($sql, $con);
      //$sql = "SELECT id, firstname, lastname FROM MyGuests";
      $que= mysqli_query($con,$sql);

//if ($result->num_rows > 0) {
    // output data of each row
    echo "<table border='1'> <tr> 
    <th>project id </th>
    <th>project name</th>
    <th>project duration</th>
    <th>project date of start</th>
    <th>project deadline</th>
    <th>Team lead id </th>
    <th>Team lead Password </th>
    <th>project leader </th>
    <th>project member-1</th>
    <th>project member-2</th>
    <th>project member-3</th>
    <th>project member-4</th>
    <th>project Domain</th>
    <th>project Language</th>
  
    </tr>";
    //while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)){
      while ($result=mysqli_fetch_assoc($que)) {
       
        echo "<tr><td>" . $result['proj_id']. "</td><td>" . $result['proj_name']. "</td><td>". $result['proj_dur']."</td><td>" . $result['proj_dos']. "</td><td>". $result['proj_line']."</td><td>" . $result['Team_id']. "</td><td>" . $result['Team_psd']. "</td><td>" . $result['proj_lead']. "</td><td>" . $result['proj_m1']. "</td><td>". $result['proj_m2']."</td><td>" . $result['proj_m3']. "</td><td>". $result['proj_m4']."</td><td>" . $result['proj_domain']. "</td><td>". $result['proj_language']."</td></tr><br>";
        
    }

    echo"</table>";
    

    echo "<br>";
    ?>