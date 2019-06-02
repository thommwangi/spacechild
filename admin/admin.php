<?php
include '../head.php';
//include 'head.php';
//include 'navigation.php';
$link = mysqli_connect("localhost", "root", "", "starchild");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    $mysqli->query("DELETE FROM users WHERE id='$delete_id'");
    $_SESSION['success_flash'] = 'User has been deleted';
    header('Location: admin.php');
}
//for adding new user
if(isset($_GET['add'])){
$name=((isset($_POST['names'])));
$uname=((isset($_POST['usernames'])));
$email=((isset($_POST['emails'])));
$password=((isset($_POST['passwords'])));
$confirm=((isset($_POST['confirm'])));

$permissions=((isset($_POST['permissionss'])));
$errors=array();

//validation adding new user form
if($_POST){
    $emailQuery=$link->query("SELECT * FROM users WHERE email='$email'");
    $emailCount = mysqli_num_rows($emailQuery);

    if($emailCount != 0){
        $errors[]='The Entered Email Already Exists In The Database';
    }
    $required = array('name','username','email','password','permissions');
    foreach($required as $f){
        if(empty($_POST[$f])){
            $errors[]='You Must Fill Out All Fields!';
            break;
        }
    }
    if(strlen($password) <6){
        $errors[]='Your Password Must Be More Than 6 Charaters';
    }
    if($password != $confirm){
        $errors[]='Your Passwords Do Not Match';
    }
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errors[]='You Must Enter A Valid Email';
    }
    
   //echo $_POST['names'];
        //add new user to database
        //$hashed = password_hash($password,PASSWORD_DEFAULT);
        $link->query("INSERT INTO users (fullnames, username, email,password,permissions) VALUES ('$name', '$uname', '$email','$password','$permissions')");
        $_SESSION['success_flash'] = 'User Has Been Added';
        header('Location: admin.php');
    
}
?>



<h2 class="text-center">Add New User</h2><hr>
<form action="admin.php?add=1" method="post">
<div class="form-group col-md-6">
<label for="name">Full Name:</label>
<input type="text" name="names" id="name" class="form-control" value="<?=$name;?>">
</div>
<div class="form-group col-md-6">
<label for="name">User Name:</label>
<input type="text" name="usernames" id="usernames" class="form-control" value="<?=$uname;?>">
</div>
<div class="form-group col-md-6">
<label for="email">Email:</label>
<input type="email" name="emails" id="emails" class="form-control" value="<?=$email;?>">
</div>
<div class="form-group col-md-6">
<label for="password">Password:</label>
<input type="password" name="passwords" id="passwords" class="form-control" value="<?=$password;?>">
</div>
<div class="form-group col-md-6">
<label for="confirm">Confirm Password:</label>
<input type="password" name="confirm" id="confirm" class="form-control" value="<?=$confirm;?>">
</div>
<div class="form-group col-md-6">
<label for="permissions">Permissions:</label>
<select class="form-control" name="permissionss">
<option value=""<?=(($permissions == '')?'selected':'');?>></option>
<option value="editor"<?=(($permissions == 'editor')?'selected':'');?>>Editor</option>
<option value="admin,editor"<?=(($permissions == 'admin,editor')?'selected':'');?>>Admin</option>
</select>
</div>
<div class="form-group col-md-6 text-right" style="margin-top:25px;">
<a href="admin.php" class="btn btn-default">Cancel</a>
<input type="submit" value="Add User" class="btn btn-primary">
</div>
</form>

<?php
}else{

    //query from selecting data from Users
    $userQuery = $link->query("SELECT * FROM users ORDER BY fullnames");
    ?> 
    <!--css and code for navigation bar -->
<!DOCTYPE html>
<html>
<head>
<link href="nav.css" type="text/css" rel="stylesheet">
</head>
<body>

    <ul>
                <li><a href="index.php">Home</a></li>
                <li><a class="active" href="admin.php">View Users</a></li>
                <li><a href="sun/sunquiz.php">Sun Quiz</a></li>
				<li><a href="asteroid/asteroidquiz.php">Asteroids Quiz</a></li>
				 <li><a href="comet/cometquiz.php">Comets Quiz</a></li>
				 <li><a href="meteor/meteorquiz.php">Meteorites Quiz</a></li>
				 <li><a href="moon/moonquiz.php">Moon Quiz</a></li>
                 <li><a href="planets/planetsquiz.php">Planets Quiz</a></li>
    </ul>








    <h2>Users</h2>
    <!-- <a href="admin.php?add=1" class="btn btn-success pull-right" id="add-product-btn">Add New User</a> -->
    <hr>
    <table class="table table-bordered table-striped table-condensed">
        <thead><th></th><th>Name</th><th>Username</th><th>Email</th><th>Password</th><th>Permissions</th></thead>
        <tbody>
        <?php while($user = mysqli_fetch_assoc($userQuery)): ?> 
            <tr>
                <td>
                <!-- delete button -->
                
                <?php if($user['id'] == $user['id']): ?>
                    <a href="admin.php?delete=<?=$user['id']; ?>" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-remove-sign"></span></a>
                <?php endif; ?>
                </td>
                <td><?= $user['fullnames'];?></td>
                <td><?= $user['username'];?></td>
                <td><?= $user['email'];?></td>
                <td><?= $user['password'];?></td>
                <td><?= $user['permissions'];?></td>
            </tr>
<?php endwhile;?>
</tbody>
</table>
<?php } ?>

