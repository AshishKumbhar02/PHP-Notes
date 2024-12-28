
<?php

# 1st way
$fruits = ["Apple", "Banana", "Orange", "Mango"];

# 2nd way
$fruits[0] = "Apple";
$fruits[1] = "Banana";
$fruits[2] = "Orange";
$fruits[3] = "Mango";


# Basic Indexed Array Declaration
echo $fruits[0] . "<br>"; // Apple
echo $fruits[1] . "<br>"; // Banana
echo $fruits[2] . "<br>"; // Orange
echo $fruits[3] . "<br>"; // Mango
echo "<hr>";


# Looping Through an Indexed Array
foreach($fruits as $fruit) {
    echo $fruit . "<br>";
}
echo "<hr>";


# Find Length of the Array
echo count($fruits);  //4
echo "<hr>";

# Adding Elements to Indexed Array
$fruits[] = "Papaya";
$fruits[] = "Grapes";


# Printing the array
echo "<pre>";
print_r($fruits);
echo "</pre>";
echo "<hr>";


# Modifying an element at a specific index
$fruits[1] = "Strawberry";
echo "<pre>";
print_r($fruits);
echo "</pre>";






?>