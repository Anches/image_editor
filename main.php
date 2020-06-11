<?php 
    session_start();   
?>

<!DOCTYPE HTML>
<html>
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta charset="UTF-8">
      <link rel="stylesheet" href="css/main.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
      <link rel="shortcut icon" href="image/logonew4.png" type="image/png">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="script/mainmenu.js"></script>
      <script src="script/up_main.js"></script>
      <script src="script/scrollcom.js"></script>
      <title>main</title>        
    </head>
    <body>
       <div class="box-1">
         <div class="container-1">
           <a class="color-a" href="description.php">Description</a>
           <a class="color-a" href="comments/comments.php">Reviews</a>
           <a class="color-a" href="main.php"><img class="logo" src="image/logonew4.png"></a>
           <a class="color-a" href="opportunities.php">Opportunities</a>
           <a class="color-a" href="reg.php">Enter</a>
        </div>

       

        <div class="container-2">
            <p class="zag1">Ediring</p>
           <p class="zag">revolutionary photo editor</p> 
         </div>

         <div class="container-3">
           <a class="edit" href="pictures/editing.php">Edit a Photo</a>
         </div>
       </div>

       <a href="#"><img src="image/up.png" class="btnup"></a>

      <div class="slider">
       
        <div class="slider__wrapper">
          <div class="slider__items">
            <div class="slider__item">
              <img src="image/slaider/slaider11.svg">
            </div>
            <div class="slider__item">
              <img  src="image/slaider/slaider22.svg">
            </div>
            <div class="slider__item">
              <img src="image/slaider/slaider33.svg">
            </div>
            <div class="slider__item">
              <img src="image/slaider/slaider44.svg">
            </div>
          </div>
        </div>
        <a class="slider__control slider__control_prev" href="#" role="button"></a>
        <a class="slider__control slider__control_next" href="#" role="button"></a>
    </div>
    <script src="script/slaider.js"></script>


    <div class="container-4">
      <p class="comm"><a href="comments/comments.php">Reviews</a></p>
        <div class="comments">
          <p class="name_date" name="name_date">
            <?php 
                require_once 'comments/connect_comment.php';
                
                $check_com = mysqli_query($connect_com, "SELECT * FROM `com` ORDER BY `com_id` DESC LIMIT 3");

                while($row=mysqli_fetch_array($check_com)){
                    echo '<div class="commentsblock commentsblock_'.$row['com_id'].'">';
                    echo '<p class="name_date"><b>'.$row['com_sender_name'].'&ensp;'.$row['com_sender_surname'].'&ensp;</b>&ensp;'.'Date:&ensp;'.$row['time'].'</p>'; 
                    echo '<p class="comment">'.$row['comment'].'</p><br><br>';    
                    echo '</div>';
                }
            ?>
          </p>
        </div>        
    </div>

  


    <div class="footer">
      <div class="foot">
        <div class="bloks">
            <p>Teaching</p>          
            <p>Overview</p>
            <p>Enter</p>
            <a href="opportunities.php">Blog</a>
            <a href="pictures/editing.php">Editing</a>
            <a href="login.php">Log In</a>
          </div>
        </div>

    <hr/>
      <div class="bacj">
        &copy;2020, All Rights Reserved
        <a href="https://www.facebook.com/"><img src="image/icon/fac.png" class="icon"></a>
        <a href="https://www.instagram.com/"><img src="image/icon/ins.png" class="icon"></a>
        <a href="https://www.pinterest.com/"><img src="image/icon/pin.png" class="icon"></a>
        <a href="404.php"><img src="image/icon/vk.png" class="icon"></a>
      </div>
    </div>     

    </body>
</html>