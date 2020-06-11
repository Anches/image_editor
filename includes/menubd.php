<?php 

$connectmenu = mysqli_connect('localhost', 'mysql', 'mysql', 'menu');

if(!$connectmenu){
    die('Error connection with database');
}

?>