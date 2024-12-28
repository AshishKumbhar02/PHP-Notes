<!--
---------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------   
What is Array?
- Array is a variable that can hold multiple values at once.  
---------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------- 
There are three types of arrays in PHP:
1. Indexed Arrays
2. Associative Arrays
3. Multidimensional Arrays
---------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------- 
1. Indexed Arrays: Indexed array uses numeric indexes (starting from 0 by default).
Syntax:
$array_name = array(value1, value2, value3);
$array_name = [value1, value2, value3, ...];
---------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------
2. Associative Arrays: Associative array uses named keys instead of numeric indexes.
Syntax:
$array_name = array("key1" => "value1", "key2" => "value2");
---------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------
3. Multidimensional Arrays: A multidimensional array is an array inside another array.
Syntax:
$array_name = array(
    array(value1, value2),
    array(value1, value2)
);

---------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------- 
-->

<?php

# Indexed Arrays
$fruits = array("Apple", "Banana", "Cherry");
echo "<pre>";
print_r($fruits);
echo "</pre>";

echo $fruits[0];  // Apple
echo "<br>";
echo $fruits[1];  // Banana
echo "<hr>";



# Associative Arrays
$person = array("name" => "Ashish", "age" => 27, "city" => "Munbai");
echo "<pre>";
print_r($person);
echo "</pre>";

echo $person["name"];  // Ashish
echo "<br>";
echo $person["age"];   // 27
echo "<hr>";



# Multidimensional Arrays
$contacts = array(
    array("Amit", "amit@example.com"),
    array("Priya", "priya@example.com")
);
echo "<pre>";
print_r($contacts);
echo "</pre>";

echo $contacts[0][0];  // Amit
echo "<br>";
echo $contacts[1][0];  // Priya

?>