<?php 
    session_start();
    if($_SESSION['user']){
        header('Location: personal.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/newpass.css">
    <link rel="shortcut icon" href="image/logonew4.png" type="image/png">
    <script src="https://www.google.com/recaptcha/api.js?render=_reCAPTCHA_site_key" async defer></script>
</head>
<body>

<a href="main.php"><img class="logo" src="image/logonew4.png"></a>

    <form class="changepass" action="../includes/newpass.php" method="POST">
        <label class="zag"> Password recovery </label><br>
        <input type="text" name="email" placeholder="Your e-mail"/><br>
        <input type="password" name="newpass" placeholder="New Password"/><br>
        <input type="password" name="confpass" placeholder="Re-Password"/><br>
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

