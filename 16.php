<?php
/**
 * Created by PhpStorm.
 * User: Sony
 * Date: 06.11.2016
 * Time: 14:45
 *
 * <p>16. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach и оператора if
выведите на экран столбец элементов массива, как показано на картинке.
1, 2, 3
4, 5, 6
7, 8, 9</p>
 */

$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
foreach ($arr as $key => $value)
{
    if ($key<=2){
        echo $value.", ";
    }


}
echo "<br>";
foreach ($arr as $key => $value)
{
    if (($key<=5)AND ($key>2)){
        echo $value.", ";
    }


}
echo "<br>";
foreach ($arr as $key => $value)
{
    if  (($key<=7)AND ($key>5)){
        echo $value.", ";
    }


}

foreach ($arr as $key => $value)
{
    if  ($key==8){
        echo $value.".";
    }


}
echo "<br>";