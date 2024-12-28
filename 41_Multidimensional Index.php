<?php

# Basic Multidimensional Array
$fruits = [
    ["Apple", "Red", 1.5],
    ["Banana", "Yellow", 0.5],
    ["Orange", "Orange", 1.2]
];

echo $fruits[0][0]; // Apple
echo "<br>";
echo $fruits[0][1]; // Red
echo "<br>";
echo $fruits[0][2]; // 1.5
echo "<hr>";

echo $fruits[1][1]; // Yellow
echo "<br>";
echo $fruits[2][2]; // 1.2
echo "<hr>";


# Looping Through a Multidimensional Array
foreach ($fruits as $fruit) {
    echo $fruit[0] . " - " . $fruit[1] . " - $" . $fruit[2];
    echo "<br>";
}
echo "<hr>";



# Adding New Elements
$fruits[] = ["Mango", "Yellow", 1.8];


# Printing the array
echo "<pre>";
print_r($fruits);
echo "</pre>";
echo "<hr>";



# Modifying Elements
$fruits[0][2] = 10;
$fruits[1][2] = 20;
$fruits[2][2] = 30;
$fruits[3][2] = 40;

echo "<pre>";
print_r($fruits);
echo "</pre>";
echo "<hr>";

?>

