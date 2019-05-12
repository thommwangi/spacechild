
    
<?php


$link = mysqli_connect("localhost", "root", "", "starchild");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


//to prevent mysql injection

$username=mysqli_real_escape_string($link, $_REQUEST['username']);
$pass=mysqli_real_escape_string($link, $_REQUEST['password']);

//query
$res=$link->query("SELECT * FROM users WHERE username='$username' and password='$pass'") or die("Query Failed".mysqli_error());
$row=mysqli_fetch_array($res);
if($row['username'] == $username && $row['password'] == $pass){
        //echo "LOGIN SUCCESS!! WELCOME ".$row['username'];
        header('Location:../../home.php');

    }else{
        echo "failed to login";
    }

            // Redirect user to index.php
// 	    header("Location: index.php");
//          }else{
// 	echo "<div class='form'>
// <h3>Username/password is incorrect.</h3>
// <br/>Click here to <a href='login.php'>Login</a></div>";
// 	}
//     }else{
?>