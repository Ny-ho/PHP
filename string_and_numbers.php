<?php

$str="Welcome to PHP";
echo strtolower($str)."<br>";
echo str_replace("PHP","BOOM REPLACED!!",$str)."<br>";
echo str_word_count($str)."<br>";

$x=2;
$y=3;
echo $x + $y;
echo "<br>";
echo $y ** $x; //power

echo "<br>";
$x--;
echo "{$y}"."<br>";

$x += 2;
echo "$x";
echo "<br>";

echo max($x,$y)."<br>";
?>
