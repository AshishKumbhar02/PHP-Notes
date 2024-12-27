<!--
---------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------- 
2. if-else Statement: This is used to execute one block of code if a condition is True, 
and another block of code if the condition is False.

Syntax:
if (condition) {
    // Code to be executed if the condition is true
} else {
    // Code to be executed if the condition is false
}

---------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------- 
-->

<?php

$num = 15;
echo "Number :", $num . "<br>";

if ($num % 2 == 0) {
    echo "$num is even number.";
} else {
    echo "$num is odd number.";
}
?>