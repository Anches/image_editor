<?php
    session_start();   
    if(!$_SESSION['user']){
        header('Location: main.php');
    }

  //  require_once 'includes/payeer.php'; 
  //  require_once 'includes/payeer_topup.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/personal.css">
    <script src="script/mainmenu.js"></script>
    <link rel="shortcut icon" href="image/logonew4.png" type="image/png">
</head>

<body>


<div class="box-1">
         <div class="container-1">
           <a class="color-a" href="description.php">Description</a>
           <a class="color-a" href="comments/comments.php">Editing</a>
           <a class="color-a" href="main.php"><img class="logo" src="image/logonew4.png"></a>
           <a class="color-a" href="opportunities.php">Opportunities</a>
           <a class="color-a" href="includes/logout.php">Exit</a>
        </div>
    </div>

    <div class="modal" id="myModal">
        <div class="modal-content">
        <form class="addform">
            <span class="close">&times;</span>
            <label class="addtxt"> Add money to your account</label>
            <input type="text" name="addbalance" placeholder="Enter amount">
            <button name="processing">Add</button>
        </form>
        </div>
    </div>


    <div class="box-2">
    <p class="name">Hello, <?php echo($_SESSION['user']['name']);?> <?php echo($_SESSION['user']['sname']);?></p>
        <div class="inmenu">
            <img class="menuimg" src="image/menu1.png">
                   <div class="phpmenu">
                   <?php
                    include 'menu.php';
                    //Выводим каталог на экран с помощью рекурсивной функции
                    $result = get_category();
                    view_category($result);               
                    ?>
                   </div>
        </div>   
        <form> 
        <div class="box-3">
        <label class="txtforbal">Your balance now (USD):</label>
        <input type="text" class="enterbal" name="balance" placeholder="0.0" readonly/>
        </form>       
        </div>  
        <div class="btn"> 
        <button class="addbal" id="mybtn">Top Up</button>
        <div>
   
    </div>
    <script src="script/menu.js"></script>
    <script src="script/modal.js"></script>
</body>

</html>