<?php
/**
 * Created by PhpStorm.
 * User: Sony
 * Date: 06.11.2016
 * Time: 14:18
 * <p>14. Дан массив с элементами 4, 2, 5, 19, 13, 0, 10. С помощью цикла foreach и оператора if
проверьте есть ли в массиве элемент со значением $e, равном 2, 3 или 4. Если есть —
выведите на экран 'Есть!', иначе выведите 'Нет!'.</p>
 * 
 */

$arr = array(2, 4,  5, 19, 1, 0, 10);
foreach ($arr as $key => $value)
{
    if (($value == 2) OR ($value == 3) OR ($value == 4))
    {
        $result = 1;
        break;
    }
    else $result = 0;

}

if ($result == 1)
{
    echo "Есть!";
}
else echo "Нет!";