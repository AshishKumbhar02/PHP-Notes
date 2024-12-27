<!-- 
---------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------- 
3. Comparison Operators: They are used to compare two values or expressions. 
These operators return a boolean value: "true" if the comparison is true, and "false" if it is false.

==	    Equal to	    $a == $b
===	    Identical   	$a === $b
!=	    Not equal to	$a != $b
!==	    Not identical	$a !== $b
>	    Greater than	$a > $b
<	    Less than	    $a < $b
>=	    Greater than or equal to	$a >= $b
<=	    Less than or equal to	$a <= $b
---------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------- 
-->


<?php
$a = 10;
$b = 15;
$c = "10";

# Equal to (==)
echo "Equal to (==): " . ($a == $c ? 'True' : 'False'); // True
echo "<hr>";

# Identical to (===)
echo "Identical to (===): " . ($a === $c ? 'True' : 'False'); // False
echo "<hr>";

# Not equal to (!=)
echo "Not equal to (!=): " . ($a != $b ? 'True' : 'False'); // True
echo "<hr>";

# Not identical (!==)
echo "Not identical (!==): " . ($a !== $b ? 'True' : 'False'); // True
echo "<hr>";

# Greater than (>)
echo "Greater than (>): " . ($a > $b ? 'True' : 'False'); // False
echo "<hr>";

# Less than (<)
echo "Less than (<): " . ($a < $b ? 'True' : 'False'); // True
echo "<hr>";

# Greater than or equal to (>=)
echo "Greater than or equal to (>=): " . ($a >= $b ? 'True' : 'False'); // False
echo "<hr>";

# Less than or equal to (<=)
echo "Less than or equal to (<=): " . ($a <= $b ? 'True' : 'False'); // True


?>