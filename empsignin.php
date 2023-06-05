<?php
session_start();
include 'dbcon.php';
if(!$con){
	die('Could not Connect My Sql:');
 }
 if(isset($_POST['mm']))
 {
$username = $_POST['name'];
$password = $_POST['pwd'];
$newpassword = $_POST['newpwd'];
$confirmnewpassword = $_POST['confirmnewpwd'];

$result = mysqli_query($con, "SELECT emppsd FROM employee WHERE empid='$username'");
if (!$result) {
    echo "The username you entered does not exist";
} elseif ($password != mysqli_fetch_assoc($result)['emppsd']) {
    echo "You entered an incorrect password";
}
if ($newpassword == $confirmnewpassword) {
    $sql = mysqli_query($con, "UPDATE employee SET emppsd='$newpassword' WHERE empid='$username'");
    if ($sql) {
        echo "Congratulations! You have successfully changed your password";
    } else {
        echo "Error updating password: " . mysqli_error($con);
    }
} else {
    echo "Passwords do not match";
}

mysqli_close($con);
 }
?>