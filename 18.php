<?php
/**
 * Created by PhpStorm.
 * User: Sony
 * Date: 06.11.2016
 * Time: 23:15
 *
 *
<p>18. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,
выходные дни следует вывести жирным.</p>
 */

$days = array("Понедельник", "Вторник", "Среда", "Четвер", "Пятница", "Суббота", "Воскресенье");
foreach ($days as $key => $value)
{
    if (($key == 5) OR ($key == 6))
    {
        echo "<b>".$value."</b><br>";
    }
    else echo $value."<br>";
}
