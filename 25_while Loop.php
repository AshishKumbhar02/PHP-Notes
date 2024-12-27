<!-- 
---------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------  
What are Loops?
- A loop is a control structure that allows code to be executed repeatedly based on a condition.

Types of Loops :
1. while Loop
2. do...while Loop
3. for Loop
4. foreach Loop

---------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------- 
1. while Loop: The while loop repeats a block of code as long as a given condition is true.
Syntax:
while (condition) {
    // Code to be executed
}

'condition': A boolean expression (true/false).
The code inside the loop runs only while the condition is true.

---------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------- 
-->

<?php

# Print numbers 1 to 5.
$i = 1;

while($i <= 5){
    echo $i . "<br>";
    $i++;
}
echo "<hr>";


# Print the multiplication table of 5.
$i = 5;
$num = 1;

while($num <= 10){
    echo "$i x $num = ". ($i * $num) . "<br>";
    $num++;
}
echo "<hr>";


?>