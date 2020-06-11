<?php 
    $connect_com = mysqli_connect('localhost', 'mysql', 'mysql', 'comments');
    if(!$connect_com){
        die('Error connection with database');
    }
?>