<!-- 
---------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------  
2. do...while Loop: It is used to run a block of code at least once, and then continue running as a condition is true.
Syntax:
do {
    // Code to be executed
} while (condition);

- do: This part runs the code inside it at least once.
- while (condition): After the code runs, it checks if the condition is true.

---------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------- 
-->

<?php

# Print numbers 1 to 5.
$i = 1;

do {
    echo $i . "<br>";
    $i++;
} while ($i <= 5);

echo "<hr>";


# Print Fibonacci Series up to 100.
$num1 = 0;
$num2 = 1;
echo "Fibonacci Series: ";
do {
    echo "$num1 ";
    $nextNum = $num1 + $num2;
    $num1 = $num2;
    $num2 = $nextNum;
} while ($num1 <= 100);


?>