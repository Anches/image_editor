<?php 
    session_start();
    require_once 'connection.php';

    $profile = $_SESSION['user']['id'];
   
    $flag = 0;
   
    $oldpass = md5($_POST['oldpass']);
    $newpass = $_POST['newpass'];
    $confpass = $_POST['confpass'];

    $query = "SELECT `pass` FROM `users` WHERE `id`='$profile'";
    $result = mysqli_query($connect, $query);

    
    $newpass = md5($_POST['newpass']);
    $confpass = md5($_POST['confpass']);

    if($newpass){
        if(preg_match("/^([a-zA-Zа-яА-Я]{8,})/", $newpass)){
            $flag++;
        }
    }
    else{        
        $_SESSION['msg'] = 'Your password is incorrect!';
        header('Location: ../menu/new5.php');
    }

    while($row = mysqli_fetch_assoc($result)){
        $pass = $row['pass'];
        
        if ($pass === $oldpass){
            
            if($newpass != '' && $confpass !=''){

                    if($newpass === $confpass){
                        $flag++;
                    }

                    else{        
                        $_SESSION['msg'] = 'Your password do not match!';
                       header('Location: ../menu/new5.php');
                    }
                }   
            else{        
                $_SESSION['msg'] = 'Fill in the password and re-password fields';
                header('Location: ../menu/new5.php');
            }            
        }

        else{
            $_SESSION['msg'] = 'Old Password and New Password do not match';
            header('Location: ../menu/new5.php');
        }

        if($flag == 1){
            $newpass = md5($_POST['newpass']);
            $confpass = md5($_POST['confpass']);
            $q = "UPDATE `users` SET `pass`='$confpass' WHERE `id`='$profile'";
            $update = mysqli_query($connect, $q);

            if($update){
                header('Location: ../personal.php');              
            }

            else{
                $_SESSION['msg'] = 'You enter wrong data';
                header('Location: ../menu/new5.php');
            }
    
        }
    
    }

   
    
?>

