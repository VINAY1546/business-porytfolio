<?php
  if(isset($_POST['del'])) 
  {
    $idd=$_POST["eid"];
    
        include 'dbcon.php';
        if(! $con ) {
          die('Could not connect: ');
       }
    
    $sql="delete from employee where empid=$idd";
     $retval = mysqli_query( $con,$sql);
     if(! $retval ) {
       die('Could not delete data: ');
    }
    else
    echo "Employee data Deleted successfully\n";
    }
?>