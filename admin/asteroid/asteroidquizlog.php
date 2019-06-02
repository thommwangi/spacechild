<?php
//include '../head.php';
$link = mysqli_connect("localhost", "root", "", "starchild");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$question = mysqli_real_escape_string($link, $_REQUEST['que']);
$option_1 = mysqli_real_escape_string($link, $_REQUEST['option_1']);
$option_2 = mysqli_real_escape_string($link, $_REQUEST['option_2']);
$option_3 = mysqli_real_escape_string($link, $_REQUEST['option_3']);
$option_4 = mysqli_real_escape_string($link, $_REQUEST['option_4']);
$answer = mysqli_real_escape_string($link, $_REQUEST['answer']);


 
// Attempt insert query execution
$sql = "INSERT INTO asteroidsquiz (que, option_1, option_2, option_3, option_4,ans) VALUES ('$question', '$option_1', '$option_2', '$option_3', '$option_4', '$answer')";
if(mysqli_query($link, $sql)){
    echo "Question added successfully.";
    header('Location:asteroidquiz.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
 ?>