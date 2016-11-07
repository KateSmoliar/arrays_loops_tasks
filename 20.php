<?php
/**
 * Created by PhpStorm.
 * User: Sony
 * Date: 06.11.2016
 * Time: 23:43
 *
<p>20.Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20
рядов, а не 5.<br><br>
x<br>
xx<br>
xxx<br>
xxxx<br>
xxxxx</p>
 */

$a = "x";
for ($i = 0; $i<=20; $i++)
{
    echo str_repeat($a, $i)."<br>" ;
}