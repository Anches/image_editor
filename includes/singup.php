<?php

session_start();
require_once 'connection.php';


$flag = 0;

$login = $_POST['login'];
$check_login = mysqli_query($connect, "SELECT * FROM `users` WHERE `login`='$login'");

if ($login != ''){
    if(preg_match("/^([a-zA-Zа-яА-Я]{5,})/", $login)){
        $flag++;

        if(mysqli_num_rows($check_login) == 0){
            $flag++;
        }

        else{
            $_SESSION['msg'] = 'Such login already exists. Please, try again.';
            header('Location: ../reg.php');
            
        }
    }   
    else{        
        $_SESSION['msg'] = 'Your login is incorrect!';
        header('Location: ../reg.php');
    }
}
else{
    $_SESSION['msg'] = 'Fill in the login field';
    header('Location: ../reg.php');
}



$name = $_POST['name'];
if ($name != ''){
    if(preg_match("/^([a-zA-Zа-яА-Я]{1,})/", $name)){
        $flag++;
    }   
    else{        
        $_SESSION['msg'] = 'Your name is incorrect!';
        header('Location: ../reg.php');
    }
}
else{
    $_SESSION['msg'] = 'Fill in the name field';
    header('Location: ../reg.php');
}



$sname = $_POST['sname'];
if ($sname != ''){
    if(preg_match("/^([a-zA-Zа-яА-Я]{1,})/", $sname)){
        $flag++;
    }   
    else{        
        $_SESSION['msg'] = 'Your surname is incorrect!';
        header('Location: ../reg.php');
    }
}
else{
    $_SESSION['msg'] = 'Fill in the surname field';
    header('Location: ../reg.php');
}



$email = $_POST['email'];
$check_email = mysqli_query($connect, "SELECT * FROM `users` WHERE `email`='$email'");

if ($email != ''){
    if(preg_match("/\w*\@tut.by|@mail.ru|@biz/", $email)){
        $flag++;

        if(mysqli_num_rows($check_email) == 0){
            $flag++;
        }

        else{
            $_SESSION['msg'] = 'Such e-mail already exists. Please, log in.';
            header('Location: ../reg.php');            
        }
    }   
    else{        
        $_SESSION['msg'] = 'Your e-mail is incorrect!';
        header('Location: ../reg.php');
    }
}
else{
    $_SESSION['msg'] = 'Fill in the e-mail field';
    header('Location: ../reg.php');
}




$pass = $_POST['pass']; 
$conpass = $_POST['conpass'];

if ($pass != '' && $conpass !='' && $pass === $conpass){
    if(preg_match("/^([a-zA-Zа-яА-Я]{8,})/", $pass)){
        $flag++;
    }   
    else{        
        $_SESSION['msg'] = 'Your password do not match!';
        header('Location: ../reg.php');
    }
}
else{
    $_SESSION['msg'] = 'Fill in the password and re-password fields';
    header('Location: ../reg.php');
}

//составляем гамму длиной в кодируемый текст
$gamma .= sha1($passw . $gamma);

function strcode($str, $passw="")
{
   $salt = "Dn8*#2n!9j";
   $len = strlen($str);
   $gamma = '';
   $n = $len>100 ? 8 : 2;
   while( strlen($gamma)<$len )
   {
      $gamma .= substr(pack('H*', sha1($passw.$gamma.$salt)), 0, $n);
   }
   return $str^$gamma;
}



    if ($flag == 7) {
        $pass = md5($pass);
        $email = base64_encode(strcode($email, 'mypassword'));;
        mysqli_query($connect, "INSERT INTO `users` (`login`, `name`, `sname`, `email`, `pass`) VALUES ('$login', '$name', '$sname', '$email', '$pass')");
        header('Location: ../login.php');
    }

    else if($login == '' && $name == '' && $sname == '' && $email == '' && $pass == '' && $conpass == ''){
        $_SESSION['msg'] = 'Please, fill in all the fields';
        header('Location: ../reg.php');
    }

    else {
        $_SESSION['message'] = 'You have entered incorrect information';
        header('Location: ../reg.php');
    }


?>