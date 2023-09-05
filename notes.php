<?php
    session_start();
    include "connect.php";     
    if(!isset($_SESSION['uid']))
        exit;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Notes Maker</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <nav>
            <ul>
                <li>
                    <h3>Notes Maker</h3>
                </li>
                <li>Home</li>

                <form>
                    <input type="text" name="search" id="search" placeholder="Search..">
                </form>
                <span>
                    <li class="dropdown">
                        <a class="dropbtn">Account</a>
                        <div class="dropdown-content">
                            <a href="logout.php">Logout</a>
                        </div>
                </span>
            </ul>
        </nav>
    </header>
  
  <?php
    if(isset($_POST["submit"])){
        $uid = $_SESSION['uid'];
        $title=$_POST["title"];
        $note=$_POST["note"];
        $sql= "INSERT INTO `notes`(`uid`, `title`, `notes`) VALUES ($uid,'$title','$note')";
    
    $ans= mysqli_query($conn,$sql);
    
    }
    ?>
    <div class="container">
        <div class="welcome">
            <h3 style="font-weight: 300;">Add Your Important Notes</h3>
        </div>
        <form  method="post">
        <div class="card">
            <div class="card-body">
                <div class="title">
                    
                         <label for="Title "> <h5 class="card-title">Title</h5></label>
                        <input type="text" id="title" name="title" placeholder="Enter Title"style="
                        margin-left: 5%;
                        width: 90%;
                        padding: 9px;
                    ">
                </div>
                <h5 class="card-title">Add a note</h5>
                <div class="form-group">
                    <textarea class="form-control" id="addTxt" name="note" rows="3"></textarea>
                </div>
                <button class="btn" id="addBtn" name="submit">Add Note</button>
            </div>
        </form>
        </div>

        <div class="welcome">
            <h3 style="font-weight: 300;">Your Notes</h3>
            <?php
            $uid = $_SESSION['uid'];
            $sql="SELECT * FROM `notes` WHERE uid = $uid";
            $ans= mysqli_query($conn,$sql);
            while($fetch=mysqli_fetch_assoc($ans))
            {
                echo 
                '<div class="noteCard">
                    <div class="card-body" >
                        <h6 class="innerCard" >'.$fetch["title"].'</h6>
                        
                        <p>'.$fetch["notes"].'</p>
                       
                        <a href="remove.php?id='.$fetch["SNo."].'"> <button class="delete" style="background-color: red;">Delete Note</button></a>
                    </div>
                </div>';
            }
            ?>
            
            
        </div>



    <script src="notes.js"></script>
</body>

</html>