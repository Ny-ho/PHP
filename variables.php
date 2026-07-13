
<?php
//login,email and password , if successfull redirect to homepage.php otherwise display "sorry" message

$name="ashim <br>";
$surname="khatri <br>";
$age=12;
$male=true;
$money=19.99;
$salary=null;

echo $name;
echo "my name is ". $name ."<!br>";
echo "my surname is {$surname} <br>";
echo $age . " is my age" . "<br>";
echo $salary;

echo gettype($name) ." is variable type of name "."<br>";
echo gettype($age)."<br>";

print_r($name);
echo "<br>";

var_dump($name);
echo"<br>" ;

$age="nineteen";
echo"<br>";
var_dump($age);
echo"<br>";

var_dump(is_integer($age));
echo"<br>";
var_dump(is_bool($male));
echo"<br>";

$status=isset($name);
echo "$status"


?>