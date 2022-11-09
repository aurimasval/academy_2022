<?php


$array = ['aaa', 'rrr'];
var_dump(count($array));

$string = "eeeeee";

var_dump(strlen($string));

##TRIM
$input = "??? test@gmail.com  --???    ???";
var_dump($input);
var_dump(trim($input));
var_dump(ltrim($input));
var_dump(rtrim($input));
var_dump(trim($input, "?- "));

###ucfirst
$input = "vardenis pavardenis sdfg dsfgdsf gs";
var_dump(ucfirst($input));

##Strtolower & strtoupper
$input = "productrCOde";
var_dump(strtolower($input));
var_dump(strtoupper($input));

###explode
$input = "Vardenis;Pavardenis;email@gmail.com;1903";
var_dump(explode(';', $input));
var_dump(explode(';', $input)[2]);

###sprintf
$name = "Vardenis";
$age = 12;
$price = 13.55;

$message = sprintf("Labas: %s, Tavo amžius yra : %d . Kaina: %02.4f ", $name, $age, $price);

echo $message;

##str_contains
$text = "Ilgas labai teksta su daug zodziu";
$pleaseFind = "tekstas";

var_dump(str_contains($text, $pleaseFind));

///In old PHP versions:
$haystack = 'How are you?';
$needle   = 'are';

if (strpos($haystack, $needle) !== false) {
    echo 'true';
}

echo PHP_EOL;
###str_starts_with & str_ends_with

$text = "Ilgas labai teksta su daug zodziu";
$pleaseFind = "Ilgas";

var_dump(str_starts_with($text, $pleaseFind));
var_dump(str_ends_with($text, "zodziu"));

##strstr
$email = "Test@gmail.com";
var_dump(strstr($email, "@yahoo"));

#substr

$string = "__EIlute&&";
var_dump(substr($string, 2, 6));
var_dump(substr("__EIlute&&...", 2, -2));

#str_split

$string = "po__du";

var_dump(str_split($string, 2));
var_dump(str_split($string));

#str_replace

var_dump(str_replace(["ieskom", "zodi", "kita"], "***", "Keiciam ieskom zodi i kita")); //"Keiciam pakeiciam zodi i kita"