<?php
/**
 * Created by PhpStorm.
 * User: Sony
 * Date: 07.11.2016
 * Time: 13:07
 * <p>26. Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф­я rand).
Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные
индексы. После вывести на экран элементы, которые больше ноля и у которых не парный
индекс.</p>
 */
$arr = array();
$n = rand(0,20);
for ($i=0; $i<=$n-1; $i++)
{
    $arr[]=rand(0,100);

}
$pr = 1;
foreach ($arr as $key=>$value)
{
   if (($key%2)==0)
   {
       if ($value==0)
       {
            $pr=0;
       }
       $pr*=$value;
   }

}
echo "Производное:".$pr;
echo "<pre>";
echo var_dump($arr);
echo "</pre>";