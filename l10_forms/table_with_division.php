<?php

//uzsidefinino kintmuosius:
$ilgis = $_POST['ilgis'] ?? 8; //default reiksme
$plotis = $_POST['plotis'] ?? 8; //default reiksme

?>


<html lang="">
<head>
    <style>
        .collumn {
            border: solid 1px black
        }
    </style>
    <title></title>
</head>
<body>

<form action="table_with_division.php" method="post">
    <label for="ilgis">ilgis:</label><br>
    <input type="number" name="ilgis" value="<?= $ilgis ?>"><br>
    <label for="plotis">plotis:</label><br>
    <input type="number"  name="plotis" value="<?= $plotis ?>"><br><br>
    <input type="submit" value="Submit">
</form>

<table>
    <tbody>
    <!-- issivesim su for ciklu -->
    <tr>
        <?php for ($i = 0; $i <= $ilgis; $i++) { ?>
            <td><?= $i; ?></td>
        <?php } ?>
    </tr>

    <?php for ($j = 1; $j <= $plotis ; $j++) { ?>
        <tr>
            <?php for ($i = 0; $i <= $ilgis; $i++) {?>
                <!-- isvesti tik pirmam -->
                <!-- padeti turetu if kur tikrinam ar  pirmas -->
                <?php if ($i === 0) { ?>
                    <td><?= $j ?></td>
                <?php } else { ?>
                    <td class="collumn"><?= number_format($j / $i, 3) ?></td>
                <?php } ?>
            <?php } ?>
        </tr>
    <?php } ?>
    </tbody>
</table>
</body>
</html>
