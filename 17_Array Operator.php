<!-- 
---------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------- 
7. Array Operators: Array operators are used to perform operations on arrays. 
These operators allow you to compare, merge, and manipulate arrays in various ways.


- Union Operator (+): Merges two arrays. 
- Equality Operator (==):- Checks if two arrays have the same keys and values (order doesn’t matter).
- Identity Operator (===):- Checks if two arrays are identical (same keys, values, and order).

---------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------- 
-->

<?php
#Union Operator (+):

$arr1 = ["a" => 1, "b" => 2, "c" => "Ashish"];
$arr2 = ["d" => "suraj", "e" => 14, "f" => 6, "g" => 4 ];
$result = $arr1 + $arr2;
echo"<pre>";
print_r($result);
echo"<pre>";
echo "<hr>";


# Equality Operator (==)
$a = ["x" => 1, "y" => 2];
$b = ["y" => 2, "x" => 1];
print_r($a == $b);  // True (1)
echo "<hr>";


# Identity Operator (===)
$a = ["x" => 1, "y" => 2];
$b = ["y" => 2, "x" => 1];
var_dump($a === $b);  // false
echo "<hr>";


?>