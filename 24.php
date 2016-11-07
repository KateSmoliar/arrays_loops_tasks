<?php
/**
 * Created by PhpStorm.
 * User: Sony
 * Date: 07.11.2016
 * Time: 12:21
 * <p>24. Вам нужно разработать программу, которая считала бы количество вхождений
какой­нибуть выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе
442158755745 встречается 4 раза.</p>
 */
?>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <form action="24.php" method="post">
        <lable for "num">Введите число в котором нужно произвести поиск</label>
        <input type = 'number' name="num" id = "num" placeholder="your value"><br>
        <lable for "num2">Введите число которое нужно найти</label>
        <input type="number" min="0" max="9" step="1" id = "num2" name = "num2"><br>
        <input type = "submit" name="submit" value = "Press button)">
        <br>
        </form>
<?php
$_POST = array(); //workaround for broken PHPstorm
parse_str(file_get_contents('php://input'), $_POST);
$number = $_POST["num"];
$number2 = $_POST["num2"];
$len = strlen($number);

$separate_num = array();
for ($i=0; $i<=($len-1); $i++)
{
    $separate_num[] = substr($number, $i, 1 );
}
$count = 0;
foreach ($separate_num as $key=> $value)
{
    if ($value == $number2)
    {
        $count+=1;
    }

}
echo $count;
