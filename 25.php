<?php
/**
 * Created by PhpStorm.
 * User: Sony
 * Date: 07.11.2016
 * Time: 12:44
 * <p>25. Ваше задание создать массив, наполнить это случайными значениями (функция rand),
найти максимальное и минимальное значение и поменять их местами.</p>
 */

$arr = array ();
$n = rand(0,20);
for ($i=0; $i<=$n-1; $i++)
{
    $arr[]=rand(0,1000);

}
foreach ($arr as $key=>$value)
{
    if ($value == min($arr))
    {
        $min_k=$key;
        $min_v = $value;
    }
    elseif ($value== max($arr))
    {
        $max_k=$key;
        $max_v=$value;
    }
}

echo '<pre>';
var_dump($arr);
echo '</pre>';

$arr[$min_k] = $max_v;
$arr[$max_k] = $min_v;


echo "<pre>";
echo var_dump($arr);
echo "</pre>";