<?php 
    session_start();
    if($_SESSION['user']){
        header('Location: personal.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/login.css">
    <link rel="shortcut icon" href="image/logonew4.png" type="image/png">
</head>

<body>
<a href="main.php"><img class="logo" src="image/logonew4.png"></a>
<form class="styleform" action="includes/signin.php" method="POST">
    <label class="zag">Log In</label>
    <input type="text" name="login" placeholder="Login">
    <input type="password" name="pass" placeholder="Password">
    <button type="submit">Enter</button>
    <label class="foot">Forgot your password?<a href="reest.php">&ensp;Recover</a></label>
    <label class="foot">Don't have an account?<a href="reg.php">&ensp;Registrate</a></label>

    <?php 
        if($_SESSION['message']){
            echo '<p class="message">'.$_SESSION['message'].'</p>';
        }    
        if($_SESSION['msg']){
            echo '<p class="message">'.$_SESSION['msg'].'</p>';
        }   
        unset($_SESSION['message']);
        unset($_SESSION['msg']);
    ?>
</form>
</body>
</html>