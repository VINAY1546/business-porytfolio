<html>
    <head>
      <title>Team Leader Login</title>
      <style>
        body{
            background-color: whitesmoke;
        }
        input{
            width: 40%;
            height: 5%;
            border: 1px;
            border-radius: 05px;
            padding: 8px 15px 8px 15px;
            margin: 10px 0px 15px 0px;
            box-shadow: 1px 1px 2px 1px grey;
        }
      </style>
    </head>
    <body>
        <center>
            <h1>EMPLOYEE LOGIN</h1>
            <form action="" method="POST">
                <input type="text" name="id" placeholder="Enter the EMPLOYEE ID"><br><br>
                <input type="text" name="id1" placeholder="Enter the EMPLOYEE PASSWORD"><br><br>
                <input type="submit" name="search" value="search id">
            </form>
            <?php
include 'dbcon.php';
if(!$con){
	die('Could not Connect My Sql:');
 }
 if(isset($_POST['search']))
 {
    $id = $_POST['id'];
    $id1 = $_POST['id1'];

    $query = "select * from employee where empid='$id' AND emppsd='$id1'";
    $query_run = mysqli_query($con,$query);

    while($row = mysqli_fetch_array($query_run))
    {
        ?>
        <form action="" method="POST">
            EMPLOYEE ID:<INPUT TYPE="text" name="empid" value="<?php echo $row['empid'] ?> "><BR>
            EMPLOYEE NAME:<INPUT TYPE="text" name="empname" value="<?php echo $row['empname'] ?> "><BR>
            EMPLOYEE AGE:<INPUT TYPE="text" name="empage" value="<?php echo $row['empage'] ?> "><BR>
            EMPLOYEE GENDER:<INPUT TYPE="text" name="empgender" value="<?php echo $row['empgender'] ?> "><BR>
            EMPLOYEE DOMAIN:<INPUT TYPE="text" name="emp_domain" value="<?php echo $row['emp_domain'] ?> "><BR>
            EMPLOYEE LANGUAGE:<INPUT TYPE="text" name="emplan" value="<?php echo $row['emplan'] ?> "><BR>
            EMPLOYEE BRANCH:<INPUT TYPE="text" name="empbran" value="<?php echo $row['empbran'] ?> "><BR>
            EMPLOYEE DESIGNATION:<INPUT TYPE="text" name="empdes" value="<?php echo $row['empdes'] ?> "><BR>
            EMPLOYEE MAIL:<INPUT TYPE="text" name="empmail" value="<?php echo $row['empmail'] ?> "><BR>
            EMPLOYEE ROLE:<INPUT TYPE="text" name="emprole" value="<?php echo $row['emprole'] ?> "><BR>
            EMPLOYEE PASSWORD:<INPUT TYPE="text" name="emppsd" value="<?php echo $row['emppsd'] ?> "><BR>

        </form>

        <?php
    }

 }

 ?>

        </center>
    </body>
</html>