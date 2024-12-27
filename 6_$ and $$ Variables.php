<!-- 
---------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------
What is $?
- $ is used to create a normal variable.

Example:
$name = "Ashish";
echo $name;   // Ashish
---------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------
What is $$?
- $$ is a "variable of a variable."

Example:
$fruit = "apple";  // Normal variable
$$fruit = "red";   // Creates $apple and assigns "red"

echo $fruit;  // apple
echo $apple;  // red

---------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------
-->


<?php

# Basic Usage

$x = "Ashish";  
$$x = 10;  

echo $x;        // Ashish
echo "<br>";
echo $Ashish;  // 10
echo "<hr>";

# Multiple Variables
$name = "age";
$$name = 25;  // Creates $age and assigns 25

echo $name;  // age
echo "<br>";
echo $age;   // 25

?>