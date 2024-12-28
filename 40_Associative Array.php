<?php

# Defining an Associative Array
$fruits = [
    "a" => "Apple",
    "b" => "Banana",
    "c" => 12,
    "d" => "Mango"
];


# Printing individual elements using keys
echo $fruits["a"] . "<br>";   // Apple
echo $fruits["b"] . "<br>";  // Banana
echo $fruits["c"] . "<br>";   // Orange
echo $fruits["d"] . "<br>";  // Mango
echo "<hr>";



# Looping Through an Associative Array
foreach($fruits as $key => $fruit) {
    echo " $key = $fruit<br>";
}
echo "<hr>";



# Find Length of the Array
echo count($fruits);  //4
echo "<hr>";



# Adding New Elements to the Associative Array
$fruits["d"] = true;
$fruits["e"] = 12345;



# Printing the array
echo "<pre>";
print_r($fruits);
echo "</pre>";
echo "<hr>";



# Modifying an element at a specific key
$fruits["d"] = "Mumbai";
echo "<pre>";
print_r($fruits);
echo "</pre>";

?>
