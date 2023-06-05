<?php
include 'dbcon.php';
if(!$con){
	die('Could not Connect My Sql:');
 }
// if(isset($_POST['add']))
 //{	 
	$name = $_POST['empn'];
	$age = $_POST['empg'];
	$gender = $_POST['empz'];
	$domain = $_POST['empd'];
	$language = $_POST['empz'];
	$branch = $_POST['empb'];
	$designation = $_POST['empw'];
    $empmail = $_POST['empq'];
	$role = $_POST['empy'];
	$psd = $_POST['empl'];

	  $sql = "insert into employee(empname,empage,empgender,emp_domain,emplan,empbran,empdes,empmail,emprole,emppsd) 
	  values('$name','$age','$gender','$domain','$language','$branch','$designation','$empmail','$role','$psd')";
	  $res=mysqli_query($con,$sql);
	  if ($res)
     
		 echo "New record created successfully !";
	   else 
		 echo "Error: " . $sql . "  " . mysqli_error($con);
	//  }
  ?>
