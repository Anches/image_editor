<?php

    session_start();
    require_once 'connect_comment.php';

    $name = $_SESSION['user']['name'];
    $surname = $_SESSION['user']['sname'];
    
    $com = $_POST['com'];
    $bnt = $_POST['submit'];  

    if(!$_SESSION['user']){
        $_SESSION['com_mes'] = 'You should be entered';
        header('Location: comments.php');
    }
    else{
        
        if($com != '' && isset($bnt)){
            mysqli_query($connect_com, "INSERT INTO `com` (`comment`, `com_sender_name`, `com_sender_surname`) VALUES ('$com', '$name', '$surname')");     
            $_SESSION['com_mes'] = 'Comment successfully added';
            header('Location: comments.php');
        }
    
        else{
            $_SESSION['com_mes'] = 'Please, enter comment';
            header('Location: comments.php');
        }
    }

   

?>