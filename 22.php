<?php
/**
 * Created by PhpStorm.
 * User: Sony
 * Date: 07.11.2016
 * Time: 11:19
 *
 * <p>22. Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.<br><br>
xx<br>
xxxx<br>
xxxxxx<br>
xxxxxxxx<br>
xxxxxxxxxx</p>
 */

$a= "x";
for ($i = 2; $i<=10; $i+=2)
{

    echo str_repeat($a, $i)."<br>";


}