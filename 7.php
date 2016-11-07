<?php
/**
 * Created by PhpStorm.
 * User: Sony
 * Date: 04.11.2016
 *
 *
<p>7. Дан массив с элементами 2, 5, 9, 15, 0, 4. С помощью цикла foreach и оператора if
выведите на экран столбец тех элементов массива, которые больше 3­х, но меньше 10.</p>Time: 16:57
 */
$arr = array(2, 5, 9, 15, 0, 4);
foreach ($arr as $value)
{
    if (($value>3) AND ($value<10))
    {
        echo $value.'<br>';
    }
}