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
$calc = new calculation();

switch ($char) {
case "+":
     echo "= " . $calc->add($number1,$number2) . "<br>";
     break;
case "-":
     echo "= " . $calc->sub($number1,$number2) . "<br>";
     break;
case "*":
     echo "= " . $calc->mult($number1,$number2) . "<br>";
     break;
case ":":
case "/":
     echo "= " . $calc->div($number1,$number2) . "<br>";
     break;
default:
     echo "unknown char!<br>";
}
?>

</body>
</html>