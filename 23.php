<?php
/**
 * Created by PhpStorm.
 * User: Sony
 * Date: 07.11.2016
 * Time: 11:22
 *
 *
<p>23. Вам нужно разработать программу, которая считала бы сумму цифр числа введенного
пользователем. Например: есть число 123, то программа должна вычислить сумму цифр 1,
2, 3, т. е. 6.</p>
 */
?>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <form action="23.php" method="post">
        <lable for "num">Введите число</label>
        <input type = 'number' name="num" id = "num" placeholder="your value"><br>
        <input type = "submit" name="submit" value = "Press button)">
        </form>
<?php
$_POST = array(); //workaround for broken PHPstorm
parse_str(file_get_contents('php://input'), $_POST);
$number = $_POST["num"];
$len = strlen($number);

$separate_num = array();
for ($i=0; $i<=($len-1); $i++)
{
    $separate_num[] = substr($number, $i, 1 );
}
$sum = 0;
foreach ($separate_num as $key=> $value)
{


    $sum +=$value ;
}

echo $sum;
