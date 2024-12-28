<!--
---------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------- 
Function Arguments:
- Arguments are used to pass data into functions. 
- They are inside the parentheses when defining a function.
- PHP supports the following types of arguments:
1. Call by Value
2. Call by Reference
3. Default Argument Values
4. Multiple Arguments
5. Variable-length Argument List
---------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------
1. Call by Value (Default)
- The value of the argument is passed to the function. 
- Changes inside the function do not affect the original variable.
Syntax:
function functionName($arg) {
    // Code to execute
}
---------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------
2. Call by Reference
- The function gets the actual variable, so changes affect the original value. 
- Use '&' before the argument name.
Syntax:
function functionName(&$arg) {
    // Code to execute
}
---------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------
3. Default Argument Values
- Set a default value for an argument. 
- If no value is passed, the default is used.
Syntax:
function functionName($arg1 = "defaultValue", $arg2 = "defaultValue") {
    // Code to execute
}
---------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------
4. Multiple Arguments: Pass more than one argument to a function, separated by commas.
Syntax:
function functionName($arg1, $arg2, ...) {
    // Code to execute
}
---------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------
5. Variable-length Arguments: Use ... (spread operator) to pass an unlimited number of arguments to a function.
Syntax:
function functionName(...$args) {
    // Code to execute
}

---------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------- 
-->

<?php

# Call by Value
function greet($name) {
    echo "Hello I am $name.<br>";
}
greet("Ashish");
greet("Swati");
echo "<hr>";



# Call by Reference
function add(&$val){
    $val += 5;
}
$num = 10;
add($num);
echo $num;
echo "<hr>";



# Default Argument Values
function abc($name = "Ashish Kumbhar") {
    echo "Name: $name <br>";
}
abc("Kalyani Jha");
abc(); // Uses default value
echo "<hr>";



# Multiple Arguments
function userInfo($name, $age) {
    echo "$name is $age years old.<br>";
}
userInfo("Ashish", 26);
userInfo("Janki", 30);
echo "<hr>";


# Variable-length Arguments
function sum(...$numbers) {
    echo "Total = ", array_sum($numbers) . "<br>";
}
sum(1, 2, 3);  // Outputs 6
sum(5, 10, 15); // Outputs 30



?>