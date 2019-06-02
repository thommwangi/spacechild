<?php
include '../../head.php';

$link = mysqli_connect("localhost", "root", "", "starchild");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    $link->query("DELETE FROM planetsquiz WHERE id='$delete_id'");
    $_SESSION['success_flash'] = 'Question has been deleted';
    header('Location: planetsquiz.php');
}
//for adding new question
if(isset($_GET['add'])){
$que=((isset($_POST['que'])));
$opt1=((isset($_POST['option_1'])));
$opt2=((isset($_POST['option_2'])));
$opt3=((isset($_POST['option_3'])));
$opt4=((isset($_POST['option_4'])));
$ans=((isset($_POST['ans'])));

$errors=array();

//validation adding new user form
if($_POST){
    $ansQuery=$link->query("SELECT * FROM planetsquiz WHERE ans='$ans'");
    $ansCount = mysqli_num_rows($ansQuery);

    if($ansCount != 0){
        $errors[]='The Entered Question Already Exists In The Database';
    }
    $required = array('que','option_1','option_2','option_3','option_4','ans');
    foreach($required as $f){
        if(empty($_POST[$f])){
            $errors[]='You Must Fill Out All Fields!';
            break;
        }
    }
   
    
    if(!empty($errors)){
        echo display_errors($errors);
    }else{
        //add new question to database
       
        $link->query("INSERT INTO planetsquiz (que, option_1, option_2,option_3,option_4,ans) VALUES ('$que','$opt1','$opt2','$opt3','$opt4','$ans')");
        $_SESSION['success_flash'] = 'Question Has Been Added';
        header('Location: planetsquiz.php');
    }
}
?>



<?php
}else{

    //query from selecting data from Users
    $queQuery = $link->query("SELECT * FROM planetsquiz ");
    ?> 
<link href="../nav.css" type="text/css" rel="stylesheet">
<ul>
                <li><a  href="../index.php" >Home</a></li>
                <li><a  href="../admin.php">View Users</a></li>
                <li><a href="../sun/sunquiz.php" >Sun Quiz</a></li>
				<li><a href="../asteroid/asteroidquiz.php">Asteroids Quiz</a></li>
                <li><a href="../comet/cometquiz.php">Comets Quiz</a></li>
                <li><a href="../meteor/meteorquiz.php">Meteorites Quiz</a></li>
                <li><a href="../moon/moonquiz.php">Moon Quiz</a></li>
                 <li><a href="../planets/planetsquiz.php" class="active">Planets Quiz</a></li>
    </ul>

    <h2>Planets Questions</h2>
    <a href="planetsquizadd.php" class="btn btn-success pull-right" id="add-product-btn">Add New Question</a>
    <hr>
    <table class="table table-bordered table-striped table-condensed">
        <thead><th></th><th>Question</th><th>Option 1</th><th>Option 2</th><th>Option 3</th><th>Option 4</th><th>Answer</th></thead>
        <tbody>
        <?php while($que = mysqli_fetch_assoc($queQuery)): ?> 
            <tr>
                <td>
                <!-- delete button -->
                
                <?php if($que['id'] == $que['id']): ?>
                    <a href="planetsquiz.php?delete=<?=$que['id']; ?>" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-remove-sign"></span></a>
                <?php endif; ?>
                </td>
                <td><?= $que['que'];?></td>
                <td><?= $que['option_1'];?></td>
                <td><?= $que['option_2'];?></td>
                <td><?= $que['option_3'];?></td>
                <td><?= $que['option_4'];?></td>
                <td><?= $que['ans'];?></td>
            </tr>
<?php endwhile;?>
</tbody>
</table>
<?php } ?>

