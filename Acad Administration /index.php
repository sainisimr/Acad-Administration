<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Sign-Up/Login Form</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="css/normalize.css">

    
        <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body>

    <div class="form" action="register.php" enctype="multipart/form-data">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Enter Details For Sign Up!!! </h1>
          
          <form action="register.php" method="post" enctype="multipart/form-data">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" name="firstname" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text" name="lastname" required autocomplete="off"/>
            </div>
          </div>

		  <div class="radio">
		    <input type="radio" name="gender" value="male"  /> Male
			<input type="radio" name="gender" value="female" style="margin-left:15px;"/> Female
			<input type="radio" name="gender" value="other" style="margin-left:15px;"/> Other
          </div>
		  
		   <div class="select">
            
              Choose Course<span class="req" style="color:#1ab188;">* </span>
            
            <select name="select" style="width:70%;background: rgba(19, 35, 47, 0.1);color: rgba(255, 255, 255, 0.5);">
			<option name="option" value="CMPE 226: Database Systems" > CMPE 226: Database Systems</option>
			<option name="option" value="CMPE/SE 131 Software Engineering"> CMPE/SE 131 Software Engineering</option>
			<option name="option" value="CMPE/SE 180-92: Data Structures and Algorithms"> CMPE/SE 180-92: Data Structures and Algorithms</option>
			</select>
			
          </div>
		  
          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name="email" required autocomplete="off"/>
			
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password" name="password" required autocomplete="off"/>
          </div>
		  <div class="field-wrap">
            <label>
              File: </label>
            <input type="file" enctype="multipart/form-data" name="image" style="margin-bottom:40px;"/>
          </div>
          
		  <div class="radio">
		    <input type="radio" name="user" value="student"  /> Student
			<input type="radio" name="user" value="teacher" style="margin-left:15px;"/> Teacher
          </div>
		  <div class="radio">Course Code required:<br/>
              
				<input type="checkbox" name="code[]" value="CMPE239"  /> CMPE239
				<input type="checkbox" name="code[]" value="CMPE280" /> CMPE280
				<input type="checkbox" name="code[]" value="CMPE283" /> CMPE283</div>
		  <button type="submit" class="button button-block"/>Get Started</button>
          
          </form>

        </div>
        <?php
		include('login.php');
		if(isset($_SESSION['login_user'])){
		header("location: profile.php");
		}
		?>
        <div id="login">   
          <h1>Login Here!!!</h1>
          
          <form action="login.php" method="post">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name="email" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="password" required autocomplete="off"/>
          </div>
          <div class="radio">
		    <input type="radio" name="user" value="student"  /> Student
			<input type="radio" name="user" value="teacher" style="margin-left:15px;"/> Teacher
			
          </div>
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button name="submit" type="submit" class="button button-block"/>Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

       <script src="js/index.js"></script>   

    
    
    
  </body>
</html>
