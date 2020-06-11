<?php 
    session_start();
    require_once 'connection.php';

    $profile = $_SESSION['user']['id'];
   
    $flag = 0;
   
    $newname = $_POST['newname'];
    $newsname = $_POST['newsname'];

    $query = "SELECT `name`, `sname` FROM `users` WHERE `id`='$profile'";
    $result = mysqli_query($connect, $query);

    while($row = mysqli_fetch_assoc($result)){
        $name = $row['name'];
        $sname = $row['sname'];
                   
        if($newname != '' && $newsname !=''){
            $flag++;
        }                  
        else{        
                $_SESSION['msg'] = 'Fill in the name and surname fields';
                header('Location: ../menu/new6.php');
            }            
        }        

        if($flag == 1){
           
            $q = "UPDATE `users` SET `name`='$newname', `sname`='$newsname' WHERE `id`='$profile'";
            $update = mysqli_query($connect, $q);

            if($update){
                unset($_SESSION['user']);
                header('Location: ../main.php');              
            }

            else{
                $_SESSION['msg'] = 'You enter wrong data';
                header('Location: ../menu/new6.php');
            }
    
        }  
    
?>

