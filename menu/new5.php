<?php 
    session_start();
    if(!$_SESSION['user']){
        header('Location: ../main.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">  
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="shortcut icon" href="../image/logonew4.png" type="image/png">
    
</head>
<body>
    <a href="../personal.php"><img class="logo" src="../image/logonew4.png"></a>
    <form class="changepass" action="../includes/changepass.php" method="POST">
        <label class="zag"> Change Password </label>
        <input type="password" name="oldpass" placeholder="Old Password"/>
        <input type="password" name="newpass" placeholder="New Password"/>
        <input type="password" name="confpass" placeholder="Re-Password"/>
        <button type="submit" name="enter">Go</button>

        <?php 
        if($_SESSION['msg']){
            echo '<p class="message">'.$_SESSION['msg'].'</p>';
        }   
        unset($_SESSION['msg']);
        ?>
    </form>
    
</body>

</html>

