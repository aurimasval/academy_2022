<?php

$ilgis = 8;
$plotis = 8;

if (isset($_POST['ilgis'])) {
    $ilgis = $_POST['ilgis'];
}
if (isset($_POST['plotis'])) {
    $plotis = $_POST['plotis'];
}


?>

<!DOCTYPE html>
<html>
<head>
    <style>
        .number {
            border: solid 1px black;
            background-color: #b4abab;
            width: 50px;
        }
    </style>
</head>
<body>

<form method="post" action="division.php">
    <label for="ilgis">Ilgis</label>
    <input type="text" id="ilgis" name="ilgis">
    <label for="plotis">Plotis</label>
    <input type="text" id="plotis" name="plotis">
    <input type="submit" value="submit">
</form>
<table>
    <?php for ($i = 0; $i <= $ilgis; $i++): ?>
        <tr>
            <td class="number"><?= $i ?></td>
            <?php for ($j = 1; $j <= $plotis; $j++): ?>
                <?php if ($i === 0) : ?>
                    <td class="number"><?= $j ?></td>
                <?php else: ?>
                    <td class=""><?= number_format($i / $j, 3) ?></td>
                <?php endif ?>
            <?php endfor ?>
        </tr>
    <?php endfor ?>
</table>

</body>
</html>