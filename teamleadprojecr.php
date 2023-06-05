<?php
include 'dbcon.php';
if(!$con){
	die('Could not Connect My Sql:');
 }
 if(isset($_POST['lgn']))
 {
    $id = $_POST['id'];

    $query = "select * from project1 where Team_id='$id'";
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
    }}