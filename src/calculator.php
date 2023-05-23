<!DOCTYPE html>
<html>
<body>

<h1>Calculator</h1>

 <form action="calculator.php" method="post">
    Number1: 
    <input name="number1" type="number">
    operator: 
    <input name="char" type="text">
    Number2: 
    <input name="number2" type="number">
 
  <input type="submit">

</form>


<?php
include ("calculation_class.php");
$number1 = $_POST["number1"];
$number2 = $_POST["number2"];
$char = $_POST["char"];


switch ($char) {
case "+":
     echo "= " . add($number1,$number2) . "<br>";
     break;
case "-":
     echo "= " . sub($number1,$number2) . "<br>";
     break;
case "*":
     echo "= " . mult($number1,$number2) . "<br>";
     break;
case ":":
case "/":
     echo "= " . div($number1,$number2) . "<br>";
     break;
default:
     echo "unknown char!<br>";
}
?>

</body>
</html>