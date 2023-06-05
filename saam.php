<?php
include 'dbcon.php';
if(!$con){
	die('Could not Connect My Sql:');
 }

// Function to securely hash the password
function hashPassword($password) {
    $options = ['cost' => 12];
    return password_hash($password, PASSWORD_BCRYPT, $options);
}

// Store new password in the database
function storePassword($username, $password) {
    global $conn;
    $hashedPassword = hashPassword($password);
    
    $sql = "INSERT INTO employee (empid,emppsd) VALUES ('$username', '$hashedPassword')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New password stored successfully.";
    } else {
        echo "Error storing password: " . $conn->error;
    }
}

// Check if the entered password is correct
function checkPassword($username, $password) {
    global $conn;
    
    $sql = "SELECT emppsd FROM employee WHERE emppsd='$username'";
    $result = $conn->query($sql);
    
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row["password"];
        
        if (password_verify($password, $hashedPassword)) {
            echo "Password is correct.";
        } else {
            echo "Password is incorrect.";
        }
    } else {
        echo "Username not found.";
    }
}
$conn->close();
?>  






