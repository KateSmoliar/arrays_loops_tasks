<?php
/*
<p>27. Создать генератор случайных таблиц. Есть переменные:
 * $row - кол-во строк в таблице,
 * $cols - кол-во столбцов в таблице.
 *
 * Есть список цветов, в массиве: $colors = array('red','yellow','blue','gray','maroon','brown','green').
 * Необходимо создать скрипт, который по заданным условиям выведет таблицу размера $rows на $cols,
 * в которой все ячейки будут иметь цвета, выбранные случайным образом из массива $colors.
 * В каждой ячейке должно находиться случайное число. <br><br>
Пример результата:<br>
<table><tr>
 * <td style='background-color:blue'>2033</td>
 * <td style='background-color:brown'>11696</td>
 * <td style='background-color:green'>712</td>
 * <td style='background-color:yellow'>32583</td>
 * <td style='background-color:red'>157</td>
 * </tr>
 */
$row = rand(1, 10);
$cols = rand(1, 10);
$colors = array('red','yellow','blue','gray','maroon','brown','green');


?>
<table>
    <tr>
<?php
for ($i=0; $i<=($cols-1); $i++ )
{
    for ($j=0; $j<=($row-1); $j++)
    {

        ?>
        <td style="background: <?php
        $colors_number = rand(0, 6);
        $number = rand(0, 1000);
        echo $colors[$colors_number]; ?>">
            <?php echo $number; ?>
        </td>

        <?php
    }
?></tr>
    <?php
}
?>
</table>
