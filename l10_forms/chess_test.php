<html lang="">
<head>
    <style>
        .collumn {
            width: 100px;
            height: 100px;
            border: solid 1px black
        }

        .odd {
            background-color: #FFFFFF;
            border: dotted 3px red;
        }

        .even {
            background-color: #000000;
            border: solid 3px antiquewhite;
        }
    </style>
    <title></title>
</head>
<body>
<table>
    <tbody>
    <?php for ($j = 0; $j < 8; $j++) { ?>
        <tr>
            <?php for ($i = 0; $i < 8; $i++) {
                $displayClass = "odd";
                if ($i % 2 === 0 && $j % 2 === 0 || $j % 2 !== 0 && $i % 2 !== 0) {
                    $displayClass = "even";
                } ?>
                <td style="collum <?= $displayClass; ?>"></td>
            <?php } ?>
        </tr>
    <?php } ?>
    </tbody>
</table>
</body>
</html>
