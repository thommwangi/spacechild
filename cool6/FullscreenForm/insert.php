<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost","102600", "choco95*", "starchild");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
  
// Escape user inputs for security
$fullNames = mysqli_real_escape_string($link, $_REQUEST['fname']);
$userName = mysqli_real_escape_string($link, $_REQUEST['uname']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$pass = mysqli_real_escape_string($link, $_REQUEST['password']);
 
// Attempt insert query execution
$sql = "INSERT INTO users (fullnames, username, email,password) VALUES ('$fullNames', '$userName', '$email','$pass')";
if(mysqli_query($link, $sql)){
    header('Location:login.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>