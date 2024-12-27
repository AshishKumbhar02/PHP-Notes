<!-- 
---------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------- 
2. Assignment Operators: They are used to assign values to variables.

=	    Assign a value	        $x = 10;	        $x becomes 10
+=	    Add and assign	        $x += 5;	        $x = $x + 5
-=	    Subtract and assign	    $x -= 3;	        $x = $x - 3
*=	    Multiply and assign	    $x *= 2;	        $x = $x * 2
/=	    Divide and assign	    $x /= 4;	        $x = $x / 4
%=	    Modulus and assign	    $x %= 3;	        $x = $x % 3
---------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------- 

-->

<?php
$a = 4;
$b = 5;

$a = $b; 
echo "Assign a value = $a"; // $a = 5;
echo"<hr>";

$a += 5; // $a = $a + 5 = 5 + 5 = 10
echo "Add assign (+ = 5): $a";
echo"<hr>";

$a -= 3; // $a = $a - 3 = 10 - 3 = 7
echo "Subtract assign (- = 3): $a";
echo"<hr>";

$a *= 2; // $a = $a * 2 = 7 * 2 = 14
echo "Multiply assign (* = 2): $a";
echo"<hr>";

$a /= 2; // $a = $a / 2 = 14 / 2 = 7
echo "Divide assign (/ = 2): $a";
echo"<hr>";

$a %= 3; // $a = $a % 3 = 7 % 3 = 1
echo "Modulus assign (% = 3): $a";


?>