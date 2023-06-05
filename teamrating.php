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

    $query = "select proj_m1,proj_m2,proj_m3,proj_m4 from project1 where Team_id='$id' AND Team_psd='$id1'";
    $query_run = mysqli_query($con,$query);

    while($row = mysqli_fetch_array($query_run))
    {
        ?>
        <form action="" method="POST">
            PROJECT MEMBER-1:<INPUT TYPE="text" name="proj_m1" value="<?php echo $row['proj_m1'] ?> "><label for prodl>PROJECT RATING:</label>
<select id="empy"  name="kk">
    <option>*</option>
    <option>**</option>
    <option>***</option>
    <option>****</option>
    <option>*****</option>
    
    </select><br>
            PROJECT MEMBER-2:<INPUT TYPE="text" name="proj_m2" value="<?php echo $row['proj_m2'] ?> "><label for prodl>PROJECT RATING:</label>
<select id="empy"  name="kk1">
    <option>*</option>
    <option>**</option>
    <option>***</option>
    <option>****</option>
    <option>*****</option>
    
    </select><br><BR>
            PROJECT MEMBER-3:<INPUT TYPE="text" name="proj_m3" value="<?php echo $row['proj_m3'] ?> "><label for prodl>PROJECT RATING:</label>
<select id="empy"  name="kk2">
    <option>*</option>
    <option>**</option>
    <option>***</option>
    <option>****</option>
    <option>*****</option>
    
    </select><br><BR>
            PROJECT MEMBER-4:<INPUT TYPE="text" name="proj_m4" value="<?php echo $row['proj_m4'] ?> "><label for prodl>PROJECT RATING:</label>
<select id="empy"  name="kk3">
    <option>*</option>
    <option>**</option>
    <option>***</option>
    <option>****</option>
    <option>*****</option>
    
    </select><br><BR><br><br>
    <input type="submit" name="dd">
           

        </form>

        <?php
    }

 }
 if(isset($_POST['dd']))
 {
    
    $b = $_POST['kk'];
    $c = $_POST['kk1']; 
    $d = $_POST['kk2']; 
    $e = $_POST['kk3'];
    $x1=rating($b);
    $x2=rating($c);
    $x3=rating($d);
    $x4=rating($e);
    $en1=$_POST['proj_m1'];
    $en2=$_POST['proj_m2'];
    $en3=$_POST['proj_m3'];
    $en4=$_POST['proj_m4'];
insertrating($en1,$x1,$con);
insertrating($en2,$x2,$con);
insertrating($en3,$x3,$con);
insertrating($en4,$x4,$con);     
echo "Project Member Rated successfully !";
}	
function rating($x)
{
      switch ($x)
    {case '*':
      $v=1;
      break;
      case '**':
            $v=2;
            break;
      case '***':
            $v=3;
            break;
      case '****':
            $v=4;break;
      case '*****':
            $v=5;
      } 
   return $v;
}
function insertrating($na,$ra,$c)
{
      $sql = "insert into rating values('$na',$ra)";
      $res=mysqli_query($c, $sql);
      if (!$res) {
            // echo "New record created successfully !";
     // } else {
            echo "Error: " . $sql . "  " . mysqli_error($c);
      }
}
 ?>

        </center>
    </body>
</html>