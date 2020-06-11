<?php 

function get_category() 
{
    include 'includes/menubd.php'; 
    $query ="SELECT * FROM personal";
    $result = mysqli_query($connectmenu, $query) or die("Error" . mysqli_error($connectmenu));
     if($result) 
     {
         $arr_cat = array();
         if(mysqli_num_rows($result) != 0) 
         {         
            //В цикле формируем массив
            for($i = 0; $i < mysqli_num_rows($result);$i++) 
            {
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);     //Вдобавок к сохранению данных в обычном массиве может сохранять строки в ассоциативном массиве, где имена полей результирующей таблицы будут ключами элементов.
                //Формируем массив, где ключами являются адишники на родительские категории
                if(empty($arr_cat[$row['parent_id']])) {
                    $arr_cat[$row['parent_id']] = array();
                }
                $arr_cat[$row['parent_id']][] = $row;
            }
        }
      //возвращаем массив
      return $arr_cat;
     }
}

function view_category($arr,$parent_id = 0) 
{     
    
     //Условия выхода из рекурсии
     if(empty($arr[$parent_id])) {
        return;
     }
     if($parent_id == 0){
        echo '<ul class="menu__box">';
     } 
     else if($parent_id == 1 || $parent_id == 2){
        echo '<ul>';
     }
     $str = '.php';
     //перебираем в цикле массив и выводим на экран
     for($i = 0; $i < count($arr[$parent_id]);$i++) {
      echo '<li class="menu__item"><a href="menu/new'.$arr[$parent_id][$i]['id'].$str.'">'
     .$arr[$parent_id][$i]['title'].'</a>';     
      //рекурсия - проверяем нет ли дочерних категорий
      view_category($arr,$arr[$parent_id][$i]['id']);
      echo '</li>';
     }
     echo '</ul>';
 
}



?>