<!-- 
---------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------- 
4. Logical Operators: logical operators are used to combine multiple conditions or expressions. 
These operators return a boolean value (true or false) depending on the result of the logical operation.

- AND (&&): Returns true if both conditions are true.
- OR (||): Returns true if at least one of the conditions is true.
- NOT (!): Reverses the boolean value of a condition (i.e., true becomes false, and false becomes true).
- XOR (xor): Returns true if only one of the conditions is true, but not both.

---------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------- 
-->
<?php

$a = 5;
$b = 10;
$c = 15;

# AND (&&)
echo "AND (&&): " . (($a < $b && $b < $c) ? 'True' : 'False'); // True (both conditions are true)
echo "<hr>";

# OR (||)
echo "OR (||): " . (($a > $b || $b < $c) ? 'True' : 'False'); // True (one condition is true)
echo "<hr>";

# NOT (!)
echo "NOT (!): " . ((!($a < $b)) ? 'True' : 'False'); // False (condition is true, so NOT makes it false)
echo "<hr>";

# XOR (xor)
echo "XOR (xor): " . (($a < $b xor $b < $c) ? 'True' : 'False'); // False (both conditions are true)
echo "<hr>";



?>