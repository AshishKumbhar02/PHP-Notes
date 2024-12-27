<!--  
What is Operators?
- operators are used to perform operations on variables and values.  
---------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------- 
Types of Operators:
1. Arithmetic Operators
2. Assignment Operators
3. Comparison Operators
4. Logical Operators
5. Increment/Decrement Operators
6. String Operators
7. Array Operators
8. Bitwise Operators
9. Conditional (ternary) operator
---------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------- 
1. Arithmetic Operators: These operators are used to perform basic mathematical operations.

+	Addition	        Adds two numbers.
-	Subtraction	        Subtracts one number from another.
*	Multiplication	    Multiplies two numbers.
/	Division	        Divides one number by another (quotient).
%	Modulus	            Returns the remainder of a division.
**	Exponentiation	    Raises a number to the power of another 
---------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------- 
-->
<?php
$a = 3;
$b = 2;


$add = $a + $b;
echo "Addition: $add"; // 5
echo"<hr>";

$sub = $a - $b;
echo "Subtraction: $sub"; // 1
echo"<hr>";

$mul = $a * $b;
echo "Multiplication: $mul"; // 6
echo"<hr>";

$Div = $a / $b;
echo "Division: $Div"; // 1.5
echo"<hr>";

$mod = $a % $b;
echo "Modulus: $mod"; // 1
echo"<hr>";

$power = $a ** $b;
echo "Exponentiation: $power"; // 9

?>