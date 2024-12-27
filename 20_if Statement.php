<!--
---------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------   
What is Conditional Statements?
- Conditional statements are used to perform different actions based on different conditions. 
- They allow the execution of code blocks depends on whether a condition 'true' or 'false'.  
---------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------- 
Types of Conditional Statements:
1. if Statement 
2. if-else Statement
3. if-elseif Statement
4. switch Statement
---------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------- 
1. if Statement: This statement executes a block of code only if a condition is 'true'.

Syntax:
if (condition) {
    // Code to be executed if the condition is true
} 

---------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------- 
-->

<?php

$age = 20;
echo "Age :", $age . "<br>";

if ($age >= 18) {
    echo "You are eligible for Vote.";
}

?>