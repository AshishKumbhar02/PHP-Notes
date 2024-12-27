<!-- 
---------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------
What is Data Types?
- Data types define the type of data a variable can hold. 
- In PHP, data types are categorized into three types: 
1. Scalar Types (Single Value)
2. Compound Types (Multiple Values)
3. Special Types 
---------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------
1. Scalar Types (Single Value):
- Integer (int): Whole numbers, positive or negative, without decimals.
Example: 42, -5, 0

- Float (float): Numbers with decimal points.
Example: 3.14, -0.99, 2.5

- String (string): A sequence of characters, enclosed in quotes.
Example: 'Hello', "PHP", '123'

- Boolean (bool): Represents true or false.
Example: true, false
---------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------
2. Compound Types (Multiple Values):
- Array: A collection of values, indexed either by numbers or strings.

Indexed Array:
Example: $arr = [1, 2, 3];

Associative Array:
Example: $arr = ["name" => "John", "age" => 25];


- Object: Instances of classes used in Object-Oriented Programming.

---------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------
3. Special Types (Specific Purpose):
- NULL: Represents a variable with no value.
Example: null

- Resource: Represents a reference to an external resource (like a database connection or file handle).
Example: $file = fopen("test.txt", "r");
---------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------
Functions to Determine Data Types:
- gettype(): Returns the type of a variable as a string.

echo gettype(42);  // Output: integer
---------------------------------------------------------------------------------------------
var_dump(): Displays information about a variable, including its type and value.

var_dump(42);  // Output: int(42)

---------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------
-->
<?php
$int = 10;
$float = 3.14;
$str = "Hello, PHP!";
$bool = true;

echo gettype($int) . "<br>";
echo gettype($float) . "<br>";
echo gettype($str) . "<br>";
echo gettype($bool) . "<hr>";

echo var_dump($int, $float, $str, $bool) . "<hr>";

echo var_dump($int) . "<br>";
echo var_dump($float) . "<br>";
echo var_dump($str) . "<br>";
echo var_dump($bool) . "<hr>";

?>

<?php
# Indexed array
$array = [1, 2, "3", 4, "Ashish"];
echo gettype($array) . "<br>";

echo "<pre>";
var_dump($array);
echo "</pre>";

echo "<hr>";

# Associative Array
$assocArray = ["name" => "Ashish", "age" => 25, "city" => "Mumbai"];
echo gettype($assocArray) . "<br>";

echo "<pre>";
var_dump($assocArray);
echo "</pre>";

echo "<hr>";
?>

<?php
# NULL
$nullV = null;
echo gettype($nullV) . "<br>";
echo var_dump($nullV) . "<br>";

?>