<!--
---------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------- 
Recursive Functions
- A recursive function is a function that calls itself during its execution.

Syntax:
function functionName($parameter) {
    if (base_condition) {  // Stop recursion when this condition is true
        return result;
    } else {
        return functionName(modified_parameter);  // Call itself with new input
    }
}

---------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------- 
-->

<?php

# Factorial of a Number
# Factorial of 5 = 5 * 4 * 3 * 2 * 1
function factorial($n)
{
    if ($n <= 1) {  // Base case
        return 1;
    }
    return $n * factorial($n - 1);  // Recursive call
}
echo factorial(5);  // 120
echo "<hr>";



# Sum of Numbers from 1 to n
# Sum of numbers from 1 to 5 = 5 + 4 + 3 + 2 + 1
function sumNumbers($n)
{
    if ($n <= 0) {  // Base case
        return 0;
    }
    return $n + sumNumbers($n - 1);  // Recursive call
}

echo sumNumbers(10);  // 55
echo "<hr>";




# Fibonacci Sequence
# The Fibonacci sequence is 0, 1, 1, 2, 3, 5, 8...
function fibonacci($n)
{
    if ($n <= 1) {
        return $n; // Base case: 0 or 1
    }
    return fibonacci($n - 1) + fibonacci($n - 2); // Recursive case
}

// Number of terms
$num = 15;

echo "Fibonacci Sequence: ";
for ($i = 0; $i < $num; $i++) {
    echo fibonacci($i) . " ";
}

echo "<hr>";

?>