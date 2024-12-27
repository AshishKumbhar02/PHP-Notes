<!-- 
---------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------- 
5. Increment/Decrement Operators: They are used to increase or decrease the value of a variable by 1.
---------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------   
- Increment Operator (++): The increment operator increases the value of a variable by 1.

- Pre-increment (++$a): Increases the value of $a by 1 before using it.
- Post-increment ($a++): Uses the current value of $a, then increases it by 1.
---------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------  
- Decrement Operator (--): The decrement operator decreases the value of a variable by 1.

- Pre-decrement (--$b): Decreases the value of $b by 1 before using it.
- Post-decrement ($b--): Uses the current value of $b, then decreases it by 1.
---------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------
-->

<?php
# Pre-increment
$a = 5;
echo "Value of A : $a <br>"; // 5
echo "Pre-increment: " . ++$a . "<br>";  // 6
echo "Value of A after pre-increment: " . $a . "<hr>";  // 6

# Post-increment 
$a = 5;
echo "Value of A : $a <br>"; // 5
echo "Post-increment: " . $a++ . "<br>";  // 5
echo "Value of A after post-increment: " . $a . "<hr>";  // 6


# Pre-decrement
$b = 5;
echo "Value of B : $b <br>"; // 5
echo "Pre-decrement: " . --$b . "<br>";  // 4
echo "Value of A after Pre-decrement: " . $b . "<hr>";  // 4

# Post-decrement 
$b = 5;
echo "Value of B : $b <br>"; // 5
echo "Post-decrement: " . $b-- . "<br>";  // 5
echo "Value of A after Post-decrement: " . $b . "<hr>";  // 4

?>