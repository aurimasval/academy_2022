<!DOCTYPE html>
<html>
<head>
    <style>
        .even {
            border: solid 1px black;
            background-color: #504545;
            width: 100px;
            height: 100px;
        }

        .odd {
            border: solid 1px black;
            background-color: #FFF;
            width: 100px;
            height: 100px;
        }
    </style>
</head>
<body>

<table>
    <?php for ($i = 1; $i <= 8; $i++): ?>
        <tr>
            <?php for ($j = 1; $j <= 8; $j++): ?>
                <td class="<?= ($j % 2 === 0 && $i % 2 === 0 || $j % 2 !== 0 && $i % 2 !== 0) ? 'even' : 'odd' ?>"></td>
            <?php endfor; ?>
        </tr>
    <?php endfor ?>
</table>

</body>
</html>