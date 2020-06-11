<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="../css/edit.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="shortcut icon" href="../image/logonew4.png" type="image/png">
    </head>
    <body>
    <div class="box-1">
         <div class="container-1">
           <a class="color-a" href="../description.php">Description</a>
           <a class="color-a" href="../price.php">Price</a>
           <a class="color-a" href="../main.php"><img class="logo" src="../image/logonew4.png"></a>
           <a class="color-a" href="../opportunities.php">Opportunities</a>
           <a class="color-a" href="../reg.php">Enter</a>
        </div>

<br><br><br><br>

    <div class="box-2">
        <div class="container-2">
            <div class="filt">
                <form class="filt" action="filters.php" method="POST">
                    <ul class="mainlist">
                        <li><p class="btnfil">Filters</p>
                            <ul class="seclist seclist-01">
                                <li><button type="submit" class="filtbnt" name="negate"><img src="../image/edit/1.png"></button></li>
                                <li><button type="submit" class="filtbnt" name="blur"><img src="../image/edit/2.png"></button></li>
                                <li><button type="submit" class="filtbnt" name="gray"><img src="../image/edit/3.png"></button></li>
                                <li><button type="submit" class="filtbnt" name="emb"><img src="../image/edit/4.png"></button></li>
                                <li><button type="submit" class="filtbnt" name="rem"><img src="../image/edit/5.png"></button></li>
                                <li><button type="submit" class="filtbnt" name="edg"><img src="../image/edit/6.png"></button></li>
                            </ul>
                        </li>
                        <li><p class="btnbri">Brightness</p>
                            <ul class="seclist seclist-02">
                                <li><input type="text"  class="enters" name="inpbright" placeholder="Enter brightness"/></li>
                                <li><button type="submit" class="setbtn" name="btnbright">Ok</button></li>
                            </ul>
                        </li>   
                        <li><p class="btncon">Contrast</p>
                            <ul  class="seclist seclist-03">
                                <li><input type="text"  class="enters" name="inpcontr" placeholder="Enter contrast" /></li>
                                <li><button type="submit" class="setbtn" name="btncontr">Ok</button></li>
                            </ul>
                        </li>
                        
                        <li><p class="btnsmo">Smotthing</p>
                            <ul  class="seclist seclist-04">
                                <li><input type="text"  class="enters" name="smin" placeholder="Enter smothing" /></li>
                                <li><button type="submit" class="setbtn" name="smbt">Ok</button></li>
                            </ul>
                        </li>
                        <br>
                    <input type="submit" class="btns" name="back" value="Back"/>
                    <input type="submit" class="btns" name="clear" value="Clear"/>
                                            <?php                 
                                            if($_SESSION['user']){                    
                                                echo '<input type="submit" class="btns" name="ok" value="Save"/><br>';
                                            }                
                                            else{
                                                $_SESSION['meg'] = 'Log in to save';
                                            }                
                                            ?>
                    
                    <br><br><label>Rendering</label><br>
                    <input type="text" name="numberserver" class="enters" placeholder="Choose the number of servers from 1 to 25:" /><br>
                    <label> Your price:
                    <?php 
                                            if($_SESSION['mes']){
                                                echo '<p class="message">'.$_SESSION['mes'].'</p>';
                                            }  
                                            unset($_SESSION['mes']);
                                            ?>  
                    </label><br>
                    <button type="submit" class="btns" name="complite">Calculate</button>
                                            
                    </ul> 
                </form>
            </div>

            <div class="form1">
                <form action="addpic.php" method="POST" enctype="multipart/form-data">
                    <label>Please, download your picture</label>
                    <input type="file" name="addpic" accept="image/*"/><br>
                    <button type="submit">Upload</button>
                    <section class="image">
                    <img src="<?= $_SESSION['img']['img']?>" width="450px">
                    
                    <?php 
                    if($_SESSION['meg']){
                        echo '<p class="message">'.$_SESSION['meg'].'</p>';
                    }  
                    unset($_SESSION['meg']);
                    ?>   
                    </section>         
                </form>
            </div>
       </div>
    </div>

    <div class="footer">
    <div class="foot">
        <div class="bloks">
            <p>Teaching</p>          
            <p>Overview</p>
            <p>Enter</p>
            <a>Blog</a>
            <a>Editing</a>
            <a>Log In</a>
        </div>
        </div>

    <hr/>
    <div class="bacj">
        &copy;2020, All Rights Reserved
        <a href="https://www.facebook.com/"><img src="../image/icon/fac.png" class="icon"></a>
        <a href="https://www.instagram.com/"><img src="../image/icon/ins.png" class="icon"></a>
        <a href="https://www.pinterest.com/"><img src="../image/icon/pin.png" class="icon"></a>
        <a href="https://vk.com/"><img src="../image/icon/vk.png" class="icon"></a>
    </div>
    </div>     

    <script src="../script/verticalmenu.js"></script>   
    </body>
</html>

            