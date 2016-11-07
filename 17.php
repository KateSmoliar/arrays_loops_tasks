<?php
/**
 * Created by PhpStorm.
 * User: Sony
 * Date: 06.11.2016
 * Time: 14:55
 *
 * <p>17.Сосктавьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий
месяц выведите жирным. Текущий месяц должен храниться в переменной $month.</p>
 */
$month_all = array ("Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль",
    "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь");
$getMonth = (date('m')-1);
$month = $month_all[$getMonth];
foreach ($month_all as $key => $value )
{
    if ($month == $value)
    {
        echo "<b>".$value."</b><br>";

    }
    else
        {
        echo $value."<br>";
    }
}
