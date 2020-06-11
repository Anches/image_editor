<?php 
    session_start();
    require_once 'connection.php';

    $email = md5($_POST['email']);
    $newpass = md5($_POST['newpass']);
    $confpass = md5($_POST['confpass']);
    if($newpass){
        if(preg_match("/^([a-zA-Zа-яА-Я]{8,})/", $newpass)){
            $flag++;
        }
    }
    else{        
        $_SESSION['msg'] = 'Your password is incorrect!';
        header('Location: ../reest.php');
    }

    $query = "SELECT `pass` FROM `users` WHERE `email`='$email'";
    $result = mysqli_query($connect, $query);
        
    if($row = mysqli_fetch_assoc($result)){
        $pass = $row['pass'];
            if($newpass === $confpass){
                $query1 = "UPDATE `users` SET `pass`='$confpass' WHERE `pass`='$pass'";
                $result1 = mysqli_query($connect, $query1); 
                
                /*$query2 = "SELECT `email` FROM `users` WHERE `email`='$email'";
                $sql = mysqli_query($connect, $query2);
                $r = mysqli_fetch_assoc($sql);
                $mail = $r['email'];
                mail($mail, "Запрос на восстановление пароля", "Hello, $username. Your new password: $confpass");*/

                header('Location: ../login.php');     
                }
                
                else{
                    $_SESSION['msg'] = 'New password and Re-password are not match';
                    header('Location: reest.php');
                }  
               
            }
             

    else{
        $_SESSION['msg'] = 'Your e-mail is incorrect';
        header('Location: ../reest.php');
    }


?>
