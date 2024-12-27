<!-- 
---------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------- 
6. String Operators:- string operators are used to manipulate or combine strings. 
- There are two primary string operators:-
1. concatenation operator:- The dot (.) operator is used to combine two or more strings together.
It joins two strings into one.
Syntax:
$Str = $str1 . $str2;
---------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------- 
2. concatenation assignment operator:- This operator adds one string to the end of another string.
Syntax:
$variable .= $string;
---------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------
-->

<?php

# Concatenation Operator (.)
$firstName = "Ashish";
$lastName = "Kumbhar";
$fullName = $firstName . " " . $lastName;  
echo "Full Name: " . $fullName . "<hr>";  // Full Name: Ashish Kumbhar


# Concatenation Assignment Operator (.=)
$greeting = "Hello";
$greeting .= " World!";  
echo "Greeting: " . $greeting . "<hr>";  // Greeting: Hello World!



# Concatenating multiple strings
$sentence = "PHP " . "is " . "fun!";
echo "Sentence: " . $sentence;  // Sentence: PHP is fun!

?>