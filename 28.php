<?php
/**
 * Created by PhpStorm.
 * User: Sony
 * Date: 07.11.2016
 * Time: 20:10
 */


?>
<table border = 1>
    <tr>
        <?php
        for ($i=1; $i<=9; $i++ )
        {
        for ($j=1; $j<=9; $j++)
        {

            ?>
            <td>
                <?php echo $i * $j; ?>
            </td>

            <?php
        }
        ?></tr>
    <?php
    }
    ?>
</table>
