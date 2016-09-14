<?php
session_start();
$conn = mysql_connect("localhost:3306", "root","");
$db = mysql_select_db("userdatabase",$conn);
$email= $_SESSION['login_user'];
$usertype=$_SESSION['user_type'];
if($usertype=='student'){
$sql = mysql_query("select * from userinfo where email_id='$email'", $conn);
$tql = mysql_query("select * from userinfo where email_id='$email'", $conn);

}
else{
	$sql = mysql_query("select * from userinfo", $conn);
	$tql = mysql_query("select * from userinfo where email_id='$email'", $conn);
}
$row=mysql_fetch_array($sql);
$row1=mysql_fetch_array($tql);


?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Sign-Up/Login Form</title>
        
  </head>

  <body>
      
          <table border="1">
		  <tr>
				<th colspan="8">Complete Database Info</th>

			</tr>
			<tr>
				<th>Image</th>
				<th>Firstname</th>
				<th>Lastname</th> 
				<th>Email</th>
				<th>Course</th>
				<th>Gender</th>
				<th>Designation</th>
				<th>Course Code Required</th>
				

			</tr>
			<?php for($i=0;$i<mysql_num_rows($sql);$i++){ ?>
			<tr>
				<td><center><?php echo '<img height="65px" width="60px" onclick="window.open(this.src)" src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>';?></center></td>
				<td><center><?php echo $row['firstname']; ?></center></td>
				<td><center><?php echo $row['lastname'];?></center></td> 
				<td><center><?php echo $row['email_id'];?></center></td>
				<td><center><?php echo $row['course'];?></center></td>
				<td><center><?php echo $row['gender'];?></center></td>
				<td><center><?php echo $row['user'];?></center></td>
				<td><center><?php echo $row['code'];?></center></td>
			</tr>
			<?php $row=mysql_fetch_array($sql);} ?>
		  </table>
 
   <a href="logout.php"><button name="logout" />logout</button></a> 
  
  
  
  
    
    
  </body>
</html>