<?php
session_start();
// include("functions.php");
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Note Maker Login Interface</title>
    <link rel="stylesheet" href="Login.css">

</head>

<body>
<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
	$user=$_POST['regno'];
	$password=$_POST['password'];
	if(!empty($user) && !empty($password))
	{
		$query="SELECT * FROM signupdetails WHERE regno = '$user' AND password = '$password'";
		$result=mysqli_query($conn,$query);
		if($result && mysqli_num_rows($result)>0)
		{echo "if";
			$user_data=mysqli_fetch_assoc($result);
			if($user_data['regno']==$user && $user_data['password']==$password)
			{
        $_SESSION['uid'] = $user_data['uid'];
        header('Location: notes.php');
			}
			else
			{
				echo "<center><h2>Wrong Credentials!</h2></center>";
			}
		}
		else
		{
      echo "<center><h3>Invalid credentials. No user exist with this Registration No. or password</h3></center>";
		}
	}
	else
	{
		echo "<center><h3>Enter all the details.</h3></center>";
	}
}
?>


  <div class="note">
  <h1>Welcome To Note Maker</h1>
  <p>This website is only for university of Hyderabad.</p>
 
  </div >
   
    <div class ="wrapper">
      <div class = "note_form" id="login_form">
       <p class ="form_title">Log-in</p>

       <form action="" method="post" >
       <label for="regno.">Registration No. :</label><br>
       <input type="text" name="regno" id = "reg_no2" placeholder="uoh registration no." required onchange="validate_reg(this.id)"> 
       <br>
       <br>
       <label for="password">Password :</label><br>
       <input type="password" name="password" id ="password2" placeholder="*********" required onchange="validate_pass(this.id)">
       <br>
       <br>
       <button class="button" type="submit" >Log In</button>
       <br>
       <a style="text-decoration:none;"  href="signup.php">Sign-up for new user</a>
       </form>

      </div>
      </div>
     <script src="input.js"></script>
    

</body>
</html>