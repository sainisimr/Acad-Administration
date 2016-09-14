<?php

 if($_SERVER["REQUEST_METHOD"] == "POST") {
	 define('DB_SERVER', 'localhost:3306');
     define('DB_USERNAME', 'root');
     define('DB_PASSWORD', '');
     define('DB_DATABASE', 'userdatabase');
     $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
	 $firstname = $_POST['firstname'];
	 $lastname = $_POST['lastname'];
	 $gender = $_POST['gender'];
	 $email = $_POST['email'];
	 $password = $_POST['password'];
	 $course = $_POST['select'];
	 $user = $_POST['user'];
	 $code=$_POST['code'];
	 $subjects="";

	 foreach ($code as $chk1) {
             $subjects.=$chk1.",";
            
        }

    echo $subjects;

	 $image = @addslashes(file_get_contents($_FILES['image']['tmp_name']));
	 
	 
	 if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
	 
	 $sql = "INSERT INTO userinfo (firstname, lastname, email_id, password, gender, course, user, image, code)
VALUES ('$firstname', '$lastname', '$email', '$password', '$gender', '$course', '$user','{$image}', '$subjects')";
	 $result = mysqli_query($db,$sql);
	 
	if ($result) {
    header("location: first.html");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}
	 mysqli_close($db);
 }


?>