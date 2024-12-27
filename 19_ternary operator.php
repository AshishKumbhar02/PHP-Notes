<!-- 
---------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------- 
9. Conditional (ternary) operator: It is a short way to write an if-else statement. 
- It checks a condition and returns one value if the condition is true, and another value if the condition is false.

Syntax:
$result = (condition) ? value_if_true : value_if_false;

Explain:
- condition: This is the test (like an if statement).
- value_if_true: This is the value if the condition is true.
- value_if_false: This is the value if the condition is false.
---------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------- 
-->

<?php

# simple Ternary
$age = 20;
$res = ($age >= 18) ? "You are Adult." : "You are Minor.";
echo $res;
echo"<hr>";


$num = 10;
$message = ($num % 2 == 0) ? "Even number" : "Odd number";
echo "$num is a ", $message; 
echo"<hr>";


# Nested Ternary
$age = 12;
$res = ($age >= 18) ? "You are Adult." : ($age >= 13 ? "You are Teenager." :  "You are Child.");
echo $res;
echo"<hr>";

?>



<?php

# Find the Maximum of Two Numbers.
$num1 = 30;
$num2 = 20;

$max = ($num1 > $num2) ? $num1 : $num2;
echo "The Maximum number is $max. ";
echo"<hr>";



# Check if a Number is Positive or Negative
$num1 = 20;

$res = ($num1 >= 0) ? "Positive" : "Negative";
echo "The Number $num1 is $res.";
echo"<hr>";


?>