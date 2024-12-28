<!--
---------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------- 
Functions Returning Values:
- A function returns a value when it finishes execution.
- The value can be any data type (integer, string, array, object, etc.).

Syntax:
function functionName($parameter1, $parameter2, ...) {
    // Code to execute
    return $value;  // The value that is returned to the caller
}

---------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------- 
-->

<?php

# Returning Values
function square($num)
{
    return $num * $num;
}
echo square(6); // 36
echo "<hr>";



# Simple Function Returning a Value
function add($a, $b) {
    return $a + $b;  // Returns the sum of a and b
}
$result = add(5, 10);
echo $result;  // 15
echo "<hr>";



# Function Return a String 
function User($name) {
    return "Hello, " . $name;  // Returns a greeting message
}
$message = User("Kajal");
echo $message;  // Hello, Kajal

?>