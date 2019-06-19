<!DOCTYPE>
<html>
<?php require 'dbconfig.php';
session_start(); ?>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Asteroids</title>
<style>
body { 
    background: url("../../images/solarsystem/asteroids.jpg");
	background-size:100%;
	background-repeat: no-repeat;
	position: relative;
	background-attachment: fixed;
}
/* button */
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 500px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
.title{
	background-color: #ccc11e;
	font-size: 28px;
  padding: 20px;
	
}
.button3 {
    border: none;
    color: white;
    padding: 10px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}
.button3 {
    background-color: white; 
    color: black; 
    border: 2px solid #f4e542;
}

.button3:hover {
    background-color: #f4e542;
    color: Black;
}

.container {
  width: 80%;
  height: 40px;
  position: relative;
  top: 40px;
  margin: 0 auto;
} 
 
#logo {
  position: absolute;
  top: 0;
  left: 0;
  color: white;
 
 
}
.navigation-wrapper {
  position: relative;
}
.navigation-button {
  will-change: transform;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
  position: fixed;
  z-index: 3;
  top: 40px;
  right: 100px;
  background: transparent;
  cursor: pointer;
}
.navigation-button .fa {
  border: 2px solid white;
  border-radius: 3px;
  padding: 10px;
    color: white;
}
 

.navigation-menu ul li {
  list-style: none;
  font-family: impact;
  font-weight: 300;
  color: hsl(0,0%,70%);
}

.navigation-menu {
  content: '';
  position: fixed;
  top: 0;
  right: 0;
  width: 50%;
  background: #fff;
  height: 100%;
  transform: skewX(0deg) translate(100%,0);
  transform-origin: top right;
  transition: all .2s ease-in;
  z-index: 4;
}
.navigation-menu ul {
  transform: skewX(-8deg);
  transform-origin: top left;
  position: fixed;
  right: 120px;
  top: 120px;
  width: 400px;
  text-align: right;

}
.navigation-menu ul li {
  position: relative;
    z-index: 999;
  font-size: 32px;
  color: hsl(0,0%,10%);
  line-height: 64px;
}
.navigation-menu ul li  a {
  border: none;
  color: hsl(0,0%,10%);
  text-decoration: none;
}
.navigation-menu.active {
  transform: skewX(8deg) translate(0,0);
    
}

.navigation-menu li {
  opacity: 0;
  transform: translate(0, 10px);
  transition: all .0s ease-in .3s;
  
}
.navigation-menu.active li {
  opacity: 1;
  transform: translate(0,0);
  transition: all .2s ease-in 0s;
}
.navigation-menu.active li:nth-child(1) {
  transition-delay: .3s;
}
.navigation-menu.active li:nth-child(2) {
  transition-delay: .4s;
}
.navigation-menu.active li:nth-child(3) {
  transition-delay: .5s;
}
.navigation-menu.active li:nth-child(4) {
  transition-delay: .6s;
}
.navigation-menu.active li:nth-child(5) {
  transition-delay: .7s;
}
.navigation-menu.active li:nth-child(6) {
  transition-delay: .8s;
}

</style>
</head>
<body><center>
<div class="navigation-wrapper">
        <div class="navigation-button">
        <i class="fa fa-bars"></i>
            </div>
            <div class="navigation-menu">
                <ul>
                    <li><a href="../../home.php">Home</a></li><br>
                    <li><a href="../../solarsystem.php">Solar System</a></li><br>
                    <li><a href="../../universe.php">Universe</a></li><br>
                    <li><a href="../../spacestuff.php">Space Stuff</a></li><br>
                    <li><a href="../../index.php">Log Out</a></li><br>
                </ul>
            </div>
        </div>
<div class="title">Asteroids</div>
<?php 															
																if (isset($_POST['click']) || isset($_GET['start'])) {
																@$_SESSION['clicks'] += 1 ;
																$c = $_SESSION['clicks'];
																if(isset($_POST['userans'])) { $userselected = $_POST['userans'];
																
																$fetchqry2 = "UPDATE `asteroidsquiz` SET `userans`='$userselected' WHERE `id`=$c-1"; 
																$result2 = mysqli_query($con,$fetchqry2);
																}
		  
																	
 																} else {
																	$_SESSION['clicks'] = 0;
																}
																
																//echo($_SESSION['clicks']);
																?>
<div class="bump"><br><form><?php if($_SESSION['clicks']==0){ ?> <button class="button" name="start" float="left"><span>START QUIZ</span></button> <?php } ?></form></div>
<form action="" method="post">  				
<table><?php if(isset($c)) {   $fetchqry = "SELECT * FROM `asteroidsquiz` where id='$c'"; 
				$result=mysqli_query($con,$fetchqry);
				$num=mysqli_num_rows($result);
				$row = mysqli_fetch_array($result,MYSQLI_ASSOC); }
		  ?>
<tr><td><h3><br><?php echo @$row['que'];?></h3></td></tr> <?php if($_SESSION['clicks'] > 0 && $_SESSION['clicks'] < 6){ ?>
  <tr><td><input required type="radio" name="userans" value="<?php echo $row['option_1'];?>">&nbsp;<?php echo $row['option_1']; ?><br>
  <tr><td><input required type="radio" name="userans" value="<?php echo $row['option_2'];?>">&nbsp;<?php echo $row['option_2'];?></td></tr>
  <tr><td><input required type="radio" name="userans" value="<?php echo $row['option_3'];?>">&nbsp;<?php echo $row['option_3']; ?></td></tr>
  <tr><td><input required type="radio" name="userans" value="<?php echo $row['option_4'];?>">&nbsp;<?php echo $row['option_4']; ?><br><br><br></td></tr>
  <tr><td><button class="button3" name="click" >Next</button></td></tr> <?php }  
																	?> 
  <form>
 <?php if($_SESSION['clicks']>5){ 
	$qry3 = "SELECT `ans`, `userans` FROM `asteroidsquiz`;";
	$result3 = mysqli_query($con,$qry3);
	$storeArray = Array();
	while ($row3 = mysqli_fetch_array($result3, MYSQLI_ASSOC)) {
     if($row3['ans']==$row3['userans']){
		 @$_SESSION['score'] += 1 ;
	 }
}
 
 ?> 
 
 
 <h2>Result</h2>
 <span>No. of Correct Answer:&nbsp;<?php echo $no = @$_SESSION['score']; 
 session_unset(); ?></span><br>
 <span>Your Score:&nbsp<?php echo $no*2; ?></span>
<?php } ?>
 <!-- <script type="text/javascript">
    function radioValidation(){
		/* var useransj = document.getElementById('rd').value;
        //document.cookie = "username = " + userans;
		alert(useransj); */
		var uans = document.getElementsByName('userans');
		var tok;
		for(var i = 0; i < uans.length; i++){
			if(uans[i].checked){
				tok = uans[i].value;
				alert(tok);
			}
		}
    }
</script> -->
</center>
</body>
<script>
    var navButton = document.querySelector('.navigation-button');
var navMenu = document.querySelector('.navigation-menu');
var win = window;

function openMenu(event) {
  
  navButton.classList.toggle('active');
  navMenu.classList.toggle('active');

  event.preventDefault();
  event.stopImmediatePropagation();
}
  
function closeMenu(event) {
  if (navButton.classList.contains('active')) {
    navButton.classList.remove('active');
    navMenu.classList.remove('active');
  }
}
  navButton.addEventListener('click', openMenu, false);

win.addEventListener('click',closeMenu, false);
    
</script>
</html>