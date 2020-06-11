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
    <link rel="stylesheet" href="../css/reg.css">
    <link rel="shortcut icon" href="image/logonew4.png" type="image/png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>

<body>
    <a href="main.php"><img class="logo" src="image/logonew4.png"></a>
    
    <form class="styleform" action="includes/singup.php" method="POST">
        <label class="zag">Sing up</label>
        <input type="text" id="login" name="login" placeholder="Login" require>
        <input type="text" id="name" name="name" placeholder="Name" require>
        <input type="text" id="sname" name="sname" placeholder="Surname" require>
        <input type="text" id="email" name="email" placeholder="E-mail" require>
        <input type="password" id="pass" name="pass" placeholder="Password" require>
        <input type="password" id="conpass" name="conpass" placeholder="Re-Password" require> 
        <button type="submit">Enter</button>
        <label class="foot">Already have an account?<a href="login.php">&ensp;Log In</a></label>
        
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