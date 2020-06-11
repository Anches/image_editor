<?php 

    session_start();
    require_once 'connect.php';

    $filtname = 'first';
    $count = 150;

    $image = $_SESSION['img']['img'];


    $neg = $_POST['negate'];
    $gra = $_POST['gray'];
    $blu = $_POST['blur'];
    $emb = $_POST['emb'];
    $rem = $_POST['rem'];
    $edg = $_POST['edg'];

    $brin = (int) $_POST['inpbright'];
    $brbt = $_POST['btnbright'];
    $coin = (int) $_POST['inpcontr'];
    $cobt = $_POST['btncontr'];    
    $smin = (int) $_POST['smin'];
    $smbt = $_POST['smbt'];

    $nserver = (int) $_POST['numberserver'];
    $complite = $_POST['complite'];

    $save = $_POST['ok'];
    $clear = $_POST['clear'];
    $calc = $_POST['calc'];
        
    
    if($image){

        $im = imagecreatefrompng($image);
        
        $myid = $_SESSION['img']['id'];

        //filters
            if(isset($gra))
            {
                imagefilter($im, IMG_FILTER_GRAYSCALE);
                $count = 5;
                $filtname = 'IMG_FILTER_GRAYSCALE';
                mysqli_query($con, "INSERT INTO `filters`(`id`, `img`, `filters`, `sum`) VALUES (NULL, '$image', '$filtname', '$count')");
                $_SESSION['meg'] = 'Image converted to grayscale';
                imagepng($im, $image);
                imagedestroy($im);
                header('Location: editing.php');            
            }

            else if(isset($neg))
            {
                imagefilter($im, IMG_FILTER_NEGATE);
                $count = 3;
                $filtname = 'IMG_FILTER_NEGATE';
                mysqli_query($con, "INSERT INTO `filters`(`id`, `img`, `filters`, `sum`) VALUES (NULL, '$image', '$filtname', '$count')");
                $_SESSION['meg'] = 'Image converted to negative';
                imagepng($im, $image);
                imagedestroy($im);
                header('Location: editing.php');            
            }

            else if(isset($blu))
            {
                imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
                $count = 2;
                $filtname = 'IMG_FILTER_GAUSSIAN_BLUR';
                mysqli_query($con, "INSERT INTO `filters`(`id`, `img`, `filters`, `sum`) VALUES (NULL, '$image', '$filtname', '$count')");
                $_SESSION['meg'] = 'Image blurred';
                imagepng($im, $image);
                imagedestroy($im);
                header('Location: editing.php');            
            }

            else if(isset($emb))
            {
                imagefilter($im, IMG_FILTER_EMBOSS);
                $count = 5;
                $filtname = 'IMG_FILTER_EMBOSS';
                mysqli_query($con, "INSERT INTO `filters`(`id`, `img`, `filters`, `sum`) VALUES (NULL, '$image', '$filtname', '$count')");
                $_SESSION['meg'] = 'Image with relief';
                imagepng($im, $image);
                imagedestroy($im);
                header('Location: editing.php');            
            }

            else if(isset($brbt))
            {
                imagefilter($im, IMG_FILTER_BRIGHTNESS, $brin);
                $count = 6;
                $filtname = 'IMG_FILTER_BRIGHTNESS';
                mysqli_query($con, "INSERT INTO `filters`(`id`, `img`, `filters`, `sum`) VALUES (NULL, '$image', '$filtname', '$count')");
                $_SESSION['meg'] = 'Image with brightness';
                imagepng($im, $image);
                imagedestroy($im);
                header('Location: editing.php');
                
            }

            else if(isset($rem))
            {
                imagefilter($im, IMG_FILTER_MEAN_REMOVAL);
                $count = 7;
                $filtname = 'IMG_FILTER_MEAN_REMOVAL';
                mysqli_query($con, "INSERT INTO `filters`(`id`, `img`, `filters`, `sum`) VALUES (NULL, '$image', '$filtname', '$count')");
                $_SESSION['meg'] = 'Image remnoval';
                imagepng($im, $image);
                imagedestroy($im);
                header('Location: editing.php');
                
            }

            else if(isset($edg))
            {
                imagefilter($im, IMG_FILTER_EDGEDETECT);
                $count = 4;
                $filtname = 'IMG_FILTER_EDGEDETECT';
                mysqli_query($con, "INSERT INTO `filters`(`id`, `img`, `filters`, `sum`) VALUES (NULL, '$image', '$filtname', '$count')");
                $_SESSION['meg'] = 'Image remnoval';
                imagepng($im, $image);
                imagedestroy($im);
                header('Location: editing.php');
                
            }

            else if(isset($cobt))
            {
                imagefilter($im, IMG_FILTER_CONTRAST, $coin);
                $count = 5;
                $filtname = 'IMG_FILTER_CONTRAST';
                mysqli_query($con, "INSERT INTO `filters`(`id`, `img`, `filters`, `sum`) VALUES (NULL, '$image', '$filtname', '$count')");
                $_SESSION['meg'] = 'Image with contrast';
                imagepng($im, $image);
                imagedestroy($im);
                header('Location: editing.php');
                        
            }

            else if(isset($smbt))
            {
                imagefilter($im, IMG_FILTER_SMOOTH, $smin);
                $count = 3;
                $filtname = 'IMG_FILTER_SMOOTH';
                mysqli_query($con, "INSERT INTO `filters`(`id`, `img`, `filters`, `sum`) VALUES (NULL, '$image', '$filtname', '$count')");
                $_SESSION['meg'] = 'Image with smoothing';
                imagepng($im, $image);
                imagedestroy($im);
                header('Location: editing.php');                    
            }
        
        else if(isset($save))
            {
                if (file_exists($image)) {
                    header('Content-Description: File Transfer');
                    header('Content-Type: application/octet-stream');
                    header('Content-Disposition: attachment; filename="'.basename($image).'"');
                    header('Expires: 0');
                    header('Cache-Control: must-revalidate');
                    header('Pragma: public');
                    header('Content-Length: ' . filesize($image));
                    readfile($image);
                    exit;
                }

                else{
                    $_SESSION['meg'] = 'Do not save';
                    header('Location: editing.php');
                }
            }

            else if(isset($clear))
            {
                unset($im);
                unset($image);
                unset($_SESSION['img']);
                mysqli_query($con, "DELETE FROM `filters`");
                header('Location: editing.php');
            }

            else if(isset($complite)){
                
                $nserver = $nserver * 5;
                $sum = mysqli_query($con, "SELECT SUM(`sum`) FROM `filters`");
                if(mysqli_num_rows($sum) > 0){
                    $itog = mysqli_fetch_assoc($sum);
                    $raschetsummi = (int) $itog["SUM(`sum`)"]; 
                    $rsc = $raschetsummi + $nserver;            
                    $_SESSION['mes'] = $rsc;
                   header('Location: editing.php');
                }
            }

            else
            {
                $_SESSION['meg'] = 'Cannot apply effect';
                header('Location: editing.php');
            }
        }

    else if(empty($image)){
        $_SESSION['meg'] = 'Please, load picture';
        header('Location: editing.php');
    }

    else{
        $_SESSION['meg'] = 'Please, load picture';
        header('Location: editing.php');
    }





?>