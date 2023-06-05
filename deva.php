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
            <h1>TEAM LEADER LOGIN</h1>
            <form action="" method="POST">
                <input type="text" name="id" placeholder="Enter the TEAM LEADER ID"><br><br>
                <input type="text" name="id1" placeholder="Enter the TEAM LEADER ID PASSWORD"><br><br>
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

    $query = "select * from project1 where Team_id='$id' AND Team_psd='$id1'";
    $query_run = mysqli_query($con,$query);

    while($row = mysqli_fetch_array($query_run))
    {
        ?>
        <form action="" method="POST">
            <INPUT TYPE="hidden" name="proj_id" value="<?php echo $row['proj_id'] ?> "><BR>
            PROJECT NAME:<INPUT TYPE="text" name="proj_name" value="<?php echo $row['proj_name'] ?> "><BR>
            PROJECT DURATION:<INPUT TYPE="text" name="proj_dur" value="<?php echo $row['proj_dur'] ?> "><BR>
            PROJECT DATE OF START:<INPUT TYPE="text" name="proj_dos" value="<?php echo $row['proj_dos'] ?> "><BR>
            PROJECT DEADLINE:<INPUT TYPE="text" name="proj_line" value="<?php echo $row['proj_line'] ?> "><BR>
            PROJECT TEAM_ID:<INPUT TYPE="text" name="Team_id" value="<?php echo $row['Team_id'] ?> "><BR>
            PROJECT LEAD:<INPUT TYPE="text" name="proj_lead" value="<?php echo $row['proj_lead'] ?> "><BR>
            PROJECT MEMBER-1:<INPUT TYPE="text" name="proj_m1" value="<?php echo $row['proj_m1'] ?> "><BR>
            PROJECT MEMBER-2:<INPUT TYPE="text" name="proj_m2" value="<?php echo $row['proj_m2'] ?> "><BR>
            PROJECT MEMBER-3:<INPUT TYPE="text" name="proj_m3" value="<?php echo $row['proj_m3'] ?> "><BR>
            PROJECT MEMBER-4:<INPUT TYPE="text" name="proj_m4" value="<?php echo $row['proj_m4'] ?> "><BR>
            PROJECT DOMAIN:<INPUT TYPE="text" name="proj_domain" value="<?php echo $row['proj_domain'] ?> "><BR>
            PROJECT LANGUAGE:<INPUT TYPE="text" name="proj_language" value="<?php echo $row['proj_language'] ?> "><BR>

        </form>

        <?php
    }

 }

 ?>

        </center>
    </body>
</html>