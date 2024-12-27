<!-- 
---------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------  
4. foreach Loop: The foreach loop is used to iterate over each element in an array or object.
Syntax:
foreach ($array as $value) {
    // Code to be executed for each element
}

OR

foreach ($array as $key => $value) {
    // Code to be executed for each key-value pair
}

---------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------- 
-->

<?php

# Simple foreach Loop.
$fruits = ["Apple", "Mango", "Banana", "Orange"];

foreach ($fruits as $arr) {
    echo $arr . "<br>";
}
echo "<hr>";


# Using Keys and Values: Associative array.
$person = [
    "name" => "Ashish",
    "Class" => "MCA",
    "Age" => 26
];

foreach ($person as $key => $value) {
    echo "$key = $value <br>";
}


?>