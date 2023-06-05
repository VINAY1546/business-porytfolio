<?php
include 'dbcon.php';
if(!$con){
	die('Could not Connect My Sql:');
 }
 
if(isset($_POST['add']))
 {
    $b = $_POST['pn'];
    $c = $_POST['pd'];
    $d = $_POST['pds'];
    $e = $_POST['pdl'];
    $f = $_POST['pl'];
    $g = $_POST['pm1'];
    $h = $_POST['pm2'];
    $i = $_POST['pm3'];
    $j = $_POST['pm4'];
    $k = $_POST['ms'];
    $l = $_POST['ms1'];
    $sql = "insert into project1(proj_name,proj_dur,proj_dos,proj_line,proj_lead,proj_m1,proj_m2,proj_m3,proj_m4,proj_domain,proj_language)values('$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l')";
    $res=mysqli_query($con, $sql);
    if ($res) {
           echo "New record created successfully !";
    } else {
          echo "Error: " . $sql . "  " . mysqli_error($con);
    }
}	
  ?>