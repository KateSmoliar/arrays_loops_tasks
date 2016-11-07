<?php
/**
 * Created by PhpStorm.
 * User: Sony
 * Date: 06.11.2016
 * Time: 14:42


<p>15. Дан массив $arr. С помощью цикла foreach и переменной $count подсчитайте количество
элементов этого массива. Проверьте работу скрипта на примере массива с элементами 4, 2,
5, 19, 13, 0, 10.</p>
 */

$arr = array (4, 2, 5, 19, 13, 0, 10);
$count = 0;
foreach ($arr as $item) {

    $count ++;

}
echo $count;