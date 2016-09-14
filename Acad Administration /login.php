<?php
 session_start();
 $error='';
 if(isset($_POST['submit'])){
	 if(empty($_POST['email'])||empty($_POST['password'])||empty($_POST['user'])){
		 $error = "Wrong email or password";
	 }
	 else{
		$email = $_POST['email'];
		$password = $_POST['password']; 
		$usertype = $_POST['user'];
		$conn = mysql_connect("localhost:3306", "root","");
		$email = stripslashes($email);
		$password = stripslashes($password);
		$email = mysql_real_escape_string($email);
		$password = mysql_real_escape_string($password);
		$db = mysql_select_db("userdatabase",$conn);
		$sql = mysql_query("select * from userinfo where password='$password' AND email_id='$email' AND user='$usertype'", $conn);
		$rows = mysql_num_rows($sql);
		if($rows == 1){
			$_SESSION['login_user']=$email;
			$_SESSION['user_type']=$usertype;
			header("location: profile.php");
			
		}else{
			$error="Email or password is invalid";
			echo $error;
		}mysql_close($conn);
	 }
 }


?>