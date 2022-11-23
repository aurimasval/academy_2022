<?php

session_start();

$factorial = null;

if (isset($_GET['number'])) {
    $factorial = calculateFactorial($_GET['number']);
}



function calculateFactorial(int $number): float
{
    if ($number < 2) {
        return 1;
    } else {
        return ($number * calculateFactorial($number - 1));
    }
}


function calcualteWithArray()
{

}

?>

<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="/factorial.php" method="get">
    <label for="number">First name:</label><br>
    <input type="text" id="number" name="number" value="<?= $_GET['number'] ?? 1 ?>"><br>
    <input type="submit" value="Submit">
</form>

<p>If you click the "Submit" button, Factorial will be calculated.</p>

<?php if($factorial): ?>
    <h2> Factorial: <?= $factorial ?> </h2>
<?php else : ?>
    <i>Please provide a number</i>
<?php endif; ?>

</body>
</html>


