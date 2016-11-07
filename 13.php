

<body>

    <?php

$n = array('1', '2', '3', '4', '5', '6', '7', '8', '9');
$m = array('1', '2', '3', '4', '5', '6', '7', '8', '9');
    ?>

<table border="1">
<tr>
        <?php
foreach ($n as $k) {
    foreach ($m as $l) {
        ?>
        <td>  <?php echo $k * $l;
            ?>
        </td>


        <?php

    }
    echo '<br>';

?></tr>
    <?php
    }

    ?>
</table>