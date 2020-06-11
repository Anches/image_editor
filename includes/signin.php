<?php 
    session_start();
    require_once 'connection.php';

    $login = $_POST['login'];
    $pass = md5($_POST['pass']);

    if($login !='' && $pass !=''){
        $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login`='$login' AND `pass`='$pass'");
        if(mysqli_num_rows($check_user) > 0){

            $user = mysqli_fetch_assoc($check_user);

            $_SESSION['user'] = [
                "id" => $user['id'],
                "name" => $user['name'],
                "sname" => $user['sname'],
                "email" => $user['email']              
            ];
            
            header('Location: ../personal.php');
        }
        else{
            $_SESSION['message'] = 'You entered an incorrect login or password';
            header('Location: ../login.php');
            }
    }
    else{
        $_SESSION['message'] = 'You have entered incorrect information';
        header('Location: ../login.php');
    }
?>
