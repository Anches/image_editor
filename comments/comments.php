<?php 
    session_start();   
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/comment.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../image/logonew4.png" type="image/png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../script/mainmenu.js"></script>
</head>

<body>

    <div class="box-1">
         <div class="container-1">
           <a class="color-a" href="../description.php">Description</a>
           <a class="color-a" href="comments.php">Reviews</a>
           <a class="color-a" href="../main.php"><img class="logo" src="../image/logonew4.png"></a>
           <a class="color-a" href="../opportunities.php">Opportunities</a>
           <a class="color-a" href="../reg.php">Enter</a>
    </div>

    <p class="zag2">Please, leave a comment</p>

    <div class="container-11">
        <form method="POST" id="comment_form" action="add_comment.php">
            <textarea name="com" placeholder="Enter comment"></textarea>
            <button class="btn" type="submit" name="submit">Leave</button>

            <?php
            if ($_SESSION['com_mes']) {
                echo '<p class="message">' . $_SESSION['com_mes'] . '</p>';
            }            
            unset($_SESSION['com_mes']);
            ?>
        </form>
    </div>

    <div class="container-22">
        <p class="zag">Comments</p>
        <p class="name_date" name="name_date">
        <?php 
            require_once 'connect_comment.php';
            $check_com = mysqli_query($connect_com, "SELECT * FROM `com` ORDER BY `com_id` DESC");

            while($row=mysqli_fetch_array($check_com)){
                echo '<p class="name_date"><b>'.$row['com_sender_name'].'&ensp;'.$row['com_sender_surname'].'&ensp;</b>&ensp;'.'Date:&ensp;'.$row['time'].'</p>'; 
                echo '<p class="comment">'.$row['comment'].'</p><br>'; 
            }
        ?>
        
        </p>

        
    </div>

</body>

</html>