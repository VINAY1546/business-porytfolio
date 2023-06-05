<?php
include 'dbcon.php';
if(!$con){
	die('Could not Connect My Sql:');
 }
 ECHO"EMPLOYEE DETAILS:";

	  $sql = "select* from employee";
      
      $que= mysqli_query($con,$sql);


    echo "<table border='1'> <tr> <th>employee id </th> <th>employee name</th>
    <th>employee age</th>
    <th>employee gender</th>
    <th>employee domain specalisation</th>
    <th>employee language specalisation</th>
    <th>employee branch</th>
    <th>employee designation</th>
    <th>employee mail</th>
    <th>employee role</th>
    <th>employee password</th>
    </tr>";
    //while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)){
      while ($result=mysqli_fetch_assoc($que)) {
       
        echo "<tr> <td>" . $result['empid']. "</td><td>" . $result['empname']. "</td><td>". $result['empage']."</td><td>" . $result['empgender']. "</td><td>". $result['emp_domain']."</td><td>" . $result['emplan']. "</td><td>". $result['empbran']."</td><td>" . $result['empdes']. "</td><td>". $result['empmail']."</td><td>". $result['emprole']."</td><td>". $result['emppsd']."</td></tr><br>";
        
    }

    echo"</table>";
    

    echo "<br>";

    echo" TEAM LEADERS";
    
        $sql1 = "select * from employee where emprole='team leader'";
          //$query = mysqli_query($sql, $con);
          //$sql = "SELECT id, firstname, lastname FROM MyGuests";
          $que1= $con->query($sql1);
    
//if ($result1->num_rows > 0) {
    // output data of each row
    echo "<table border='1'> <tr> <th>employee id </th> <th>employee name</th>
        <th>employee age</th>
        <th>employee gender</th>
        <th>employee domain specalisation</th>
        <th>employee language specalisation</th>
        <th>employee branch</th>
        <th>employee designation</th>
        <th>employee mail</th>
        <th>employee role</th>
        <th>employee password</th>
        </tr>";
    //while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)){
    while ($result1= $que1->fetch_assoc()) {

        echo "<tr> <td>" . $result1['empid']. "</td><td>" . $result1['empname']. "</td><td>". $result1['empage']."</td><td>" . $result1['empgender']. "</td><td>". $result1['emp_domain']."</td><td>" . $result1['emplan']. "</td><td>". $result1['empbran']."</td><td>" . $result1['empdes']. "</td><td>". $result1['empmail']."</td><td>". $result1['emprole']."</td><td>". $result1['emppsd']."</td></tr><br>";

    }
//}
 

        echo"</table>";

        echo "<br>";

        echo"SOFTWARE TESTERS";
        
            $sql1 = "select * from employee where emprole='software tester'";
              //$query = mysqli_query($sql, $con);
              //$sql = "SELECT id, firstname, lastname FROM MyGuests";
              $que1= $con->query($sql1);
        
    //if ($result1->num_rows > 0) {
        // output data of each row
        echo "<table border='1'> <tr> <th>employee id </th> <th>employee name</th>
            <th>employee age</th>
            <th>employee gender</th>
            <th>employee domain specalisation</th>
            <th>employee language specalisation</th>
            <th>employee branch</th>
            <th>employee designation</th>
            <th>employee mail</th>
            <th>employee role</th>
            <th>employee password</th>
            </tr>";
        //while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)){
        while ($result1= $que1->fetch_assoc()) {
    
            echo "<tr> <td>" . $result1['empid']. "</td><td>" . $result1['empname']. "</td><td>". $result1['empage']."</td><td>" . $result1['empgender']. "</td><td>". $result1['emp_domain']."</td><td>" . $result1['emplan']. "</td><td>". $result1['empbran']."</td><td>" . $result1['empdes']. "</td><td>". $result1['empmail']."</td><td>". $result1['emprole']."</td><td>". $result1['emppsd']."</td></tr><br>";
    
        }
    //}
     
    
            echo"</table>";

            echo "<br>";

    echo"SOFTWARE ENGINEER";

    echo "<br>";
        $sql1 = "select * from employee where emprole='software engineer'";
          //$query = mysqli_query($sql, $con);
          //$sql = "SELECT id, firstname, lastname FROM MyGuests";
          $que1= $con->query($sql1);
    
//if ($result1->num_rows > 0) {
    // output data of each row
    echo "<table border='1'> <tr> <th>employee id </th> <th>employee name</th>
        <th>employee age</th>
        <th>employee gender</th>
        <th>employee domain specalisation</th>
        <th>employee language specalisation</th>
        <th>employee branch</th>
        <th>employee designation</th>
        <th>employee mail</th>
        <th>employee role</th>
        <th>employee password</th>
        </tr>";
    //while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)){
    while ($result1= $que1->fetch_assoc()) {

        echo "<tr> <td>" . $result1['empid']. "</td><td>" . $result1['empname']. "</td><td>". $result1['empage']."</td><td>" . $result1['empgender']. "</td><td>". $result1['emp_domain']."</td><td>" . $result1['emplan']. "</td><td>". $result1['empbran']."</td><td>" . $result1['empdes']. "</td><td>". $result1['empmail']."</td><td>". $result1['emprole']."</td><td>". $result1['emppsd']."</td></tr><br>";

    }
       

   
    
?>
        
        
    
        
