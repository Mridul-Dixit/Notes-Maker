<?php 
include "connect.php";

function testinput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if($_SERVER['REQUEST_METHOD'] =='POST' && isset($_POST["submit"]))
{
    $fname = testinput($_POST['fname']);
    $lname = testinput($_POST['lname']);
    $regno = testinput($_POST['regno']);
    $password = testinput($_POST['password']);
    $cpassword = testinput($_POST['cpassword']); 
    $query = "INSERT INTO `signupdetails`(`fname`, `lname`, `regno`, `password`) VALUES ('$fname','$lname','$regno','$password')";
    $var  = mysqli_query($conn,$query);
    if($var) {
        header('Location: index.php');
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-up page</title>
    <link rel="stylesheet" href="Login.css">
</head>
<body>
    <div class="note">
        <h1>Welcome To Note Maker</h1>
        <p>This website is only for university of Hyderabad.</p>
        </div >
    <div class="wrapper">
    <div class = "note_form" id="signup_form">
        <p class = "form_title">Sign-up for free</p>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <label for="fname">First Name : </label><br>
            <input type="text" name = "fname" id ="fname" placeholder="Enter First Name" onchange="validate_name(this.id)" required >
            <br>
            <br>
            <label for="lname">Last Name :</label><br>
            <input type="text" name="lname" id ="lname"   placeholder="Enter Last Name" onchange="validate_name(this.id)" required>
            <br>
            <br>
            <label for="regno">Registration No. :</label><br>
            <input type="text" name="regno" id = "reg_no1" placeholder="uoh registration no."  onchange="validate_reg(this.id)" required> 
            <br>
            <br>
            <label for="password">Password :</label><br>
            <input type="password" name="password" id ="password" placeholder="*********" onchange="validate_pass(this.id)" required >
            <br>
            <br>
            <label for="cpassword">Confirm Password  :</label><br>
            <input type="password" name="cpassword" id = "cpassword" placeholder = "**********"  onchange = "check(this.id)"required >
            <br>
            <br>
            <button class= "button" type="submit" name="submit" value="submit">Sign-up</button>
        </form>
        </div>
        </div>
      
         <script src="input.js"></script> 
         <!-- onclick="check()" -->
    
</body>
</html>