<?php
/**
 * Created by PhpStorm.
 * User: Sony
 * Date: 04.11.2016
 * Time: 16:52
 *
<p>6. Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, а
русские — в массив $ru.
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$en = array('green', 'red','blue');
$ru = array('зеленый', 'красный', 'голубой');</p>
 */
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$en = array();
$ru = array();
foreach ($arr as $key => $value)
{
    $en[]= $key;
    $ru[]= $value;
}
