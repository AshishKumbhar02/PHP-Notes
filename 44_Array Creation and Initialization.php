<!-- 
---------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------- 
1. Using array(): 
- The array() function creates an array in PHP. 
- It can hold multiple values of different types.
Syntax:
array(value1, value2, value3, ...);
---------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------- 
2. Using range():
- The range() function generates  array with values within a range. 
- It can include integers or characters.
Syntax:
range(start, end, step);


start: Starting value.
end: Ending value.
step (optional): The increment between elements (default is 1).
---------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------

-->


<?php

# Indexed array
$numbers = array(1, 2, 3, 4, 5);
echo "<pre>";
print_r($numbers);
echo "</pre>";
echo "<hr>";


# Associative array
$person = array("name" => "John", "age" => 30, "city" => "New York");
echo "<pre>";
print_r($person);
echo "</pre>";
echo "<hr>";


# Multidimensional array
$matrix = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);
echo "<pre>";
print_r($matrix);
echo "</pre>";
echo "<hr>";

?>

<?php

# Numeric range
$num = range(1, 10);
echo "<pre>";
print_r($num);
echo "</pre>";
echo "<hr>";


# Numeric range with step
$num = range(2, 10, 2);
echo "<pre>";
print_r($num);
echo "</pre>";
echo "<hr>";


# Alphabetic range
$let = range('a', 'f');
echo "<pre>";
print_r($let);
echo "</pre>";
echo "<hr>";



# Alphabetic range in reverse
$let = range('z', 'a');
echo "<pre>";
print_r($let);
echo "</pre>";
echo "<hr>";

?>