<?php
session_start();

$link = mysqli_connect("localhost", "102600", "choco95*", "starchild");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


//to prevent mysql injection
//login user

$username=mysqli_real_escape_string($link, $_REQUEST['username']);
$pass=mysqli_real_escape_string($link, $_REQUEST['password']);
$permissions="";

//query
$res=$link->query("SELECT * FROM users WHERE username='$username' and password='$pass'") or die("Query Failed".mysqli_error());
$row=mysqli_fetch_array($res);
$permissions=$row['permissions'];
if( $permissions == "admin"){
        //echo "LOGIN SUCCESS!! WELCOME ".$row['username'];
        header('Location:../../admin/admin.php');

    }elseif($row['username'] == $username && $row['password'] == $pass){
        header('Location:../../home.php');
    }else{
        echo 'Login Failed';
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