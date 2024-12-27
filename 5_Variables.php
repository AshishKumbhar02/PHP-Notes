<!-- 
---------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------
What is Variables?
- Variables are "containers" for storing information.
- Variables are denoted with a dollar sign ($) followed by the variable name. 
Syntax:
$variable_name = value;

Example
$x = 5;
$y = "Ashish";
---------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------
Rules for PHP Variables:
- Variable names must start with a letter or an underscore (_).
- Variable names cannot start with a number.
- Variable names can only contain alphanumeric characters and underscores (A-Z, a-z, 0-9, _).
- Variables in PHP are case-sensitive.

Valid Variables:
$myVar           // Letters and camelCase
$_my_var         // Starts with an underscore
$my_var123       // Includes numbers
$MYVAR          // Uppercase is allowed
$var             // Short names are fine
$_123var         // Starts with an underscore, numbers are allowed after

Invalid Variables:
$123var       // Starts with a number
$my-var       // Contains a hyphen (dash)
$my var       // Contains a space
$my*var      // Contains special characters (*)
$my@var       // Contains special characters (@)
$echo        // Uses a reserved keyword
---------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------
PHP Case Sensitivity:
- PHP is case-sensitive for variable names, function names, and class names.
- It is not case-sensitive for keywords (like echo, if, else, etc.).
---------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------
Operations on Variables:
- Concatenation: Use the . operator to concatenate strings.
---------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------
-->

<?php
# String variable
$name = "Ashish <br>";
echo $name;

# Integer variable
$age = 25;
echo $age;
echo "<br>";

# Float variable
$price = 19.99;
echo $price;
echo "<hr>";

# Sum of two variables
$x = 5;
$y = 6;
$z = $x + $y;
echo $z;
echo "<hr>";

# Assign Multiple Values
$x = $y = $z = 10;

echo $x; //  10
echo $y; //  10
echo $z; //  10

?>


<?php
# Concatenating strings
$firstName = "Ashish";
$lastName = "Kumbhar";

# Concatenation using . operator
$fullName = $firstName . " " . $lastName;

# Display the result
echo "Full Name: " . $fullName;  // Ashish Kumbhar 
?>