<?php 
 unset($path);
    session_start();
    require_once 'connect.php';
    require_once 'filters.php';
   
    $path = 'uploads/' . time() . $_FILES['addpic']['name'];
    if(!move_uploaded_file($_FILES['addpic']['tmp_name'], $path)){
        $_SESSION['meg'] = 'Error. Reload picture';
        header('Location: editing.php');
    }


    mysqli_query($con,"INSERT INTO `images` (`id`, `img`) VALUES (NULL, '$path')");

    $check_img = mysqli_query($con, "SELECT * FROM `images` WHERE `img` = '$path'");
    if(mysqli_num_rows($check_img) > 0){

        $img = mysqli_fetch_assoc($check_img);

        $_SESSION['img'] = [
            "id" => $img['id'],
            "img" => $img['img']              
        ];

       header('Location: editing.php');           
    }

    else{
        $_SESSION['meg'] = 'Your picture can not to load';
        header('Location: editing.php');    
    }
?>
