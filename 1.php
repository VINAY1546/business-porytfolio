<?php
include 'dbcon.php';
if(!$con){
	die('Could not Connect My Sql:');
 }
 $projname = $_POST['pn'];
 $projdur = $_POST['pd'];
 $pdos = $_POST['ps'];
 $prline = $_POST['psk'];
 
 $sql = "insert into project(project_name,project_duration,project_dateofstart,projectline) 
	  values('$projname','$projdur','$pdos','$prline')";
	  $res=mysqli_query($con,$sql);
	  if ($res)
     
		 echo "New record created successfully !";
	   else 
		 echo "Error: " . $sql . "  " . mysqli_error($con);
 
  ?>