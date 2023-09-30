
<?php
// ASSIGNMENT 1
// Replace ? With Arithmetic Operators
//echo 10 ? 20 ? 15 ? 3 ? 190 ? 10 ? 400; // 0

echo (10 - 10) / (20 + 15 + 3 + 190 + 400) . '<br>';

// ASSAIGNMENT 2
$a = "10";
var_dump((int)$a);
echo '<br>';
var_dump(intval($a));
echo '<br>';
echo +$a . '<br>';
echo gettype(+$a) . '<br>';
echo $a;
echo '<br>';

// ASSIGNMENT 3
$a = 10;
$b = 20;
$c = ($b / $a) - 3;

echo $c . '<br>';
echo gettype($c);

//ASSIGNMENT 4
$a = 10;
$b = 20;
$c = 15;

var_dump($a != $b); // True
var_dump($c != $a); // True
var_dump($a !== $b); // True
var_dump($a <> $b); // True
var_dump($a !== $c); // True
var_dump($a <> $c); // True
var_dump(gettype($a) == gettype($b)); // True
var_dump(gettype($a) == gettype($b)); // True
var_dump(gettype((float) $a) != gettype($b)); // True

echo '<br>';

// ASSIGNMENT 5

$points = 10;
$points++;
$points++;
$points++;
echo $points; // 13
echo '<br>';
--$points;
--$points;
--$points;
--$points;
--$points;

echo $points; // 8;
echo '<br>';
//ASSIGNMENT 6
$a = "Elzero";
$b = "Web";
$c = "School";


echo $d = "{$a}{$b}{$c}";
echo '<br>';

echo $d = $a . $b . $c . "<br>";
echo $d = "$a $b $c <br>";

echo '<br> #########';

// WE NEED SOLUTION challange
$a = 10;
$b = 20;

echo $a + $b * $a + $b + $a * $a * $a; // 10000

//ASSIGNMENT 7
$a = $b;
if ($a = @$b) {
    echo "custom error";
}

echo '<br>';

$f = @file("Not_A_File");
if ($f == @file("Not_A_File")) {
    echo "custom error";
}

echo '<br>';

(@include("Not_A_File")) or die("custom error ");
?>