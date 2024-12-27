<!-- 
---------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------
What is Type Casting?
- type casting refers to converting a variable from one data type to another. 
- There are two main types of casting in PHP: implicit casting (automatic) and explicit casting (manual).

1. Implicit Type Casting (Automatic):-
- PHP automatically converts one data type to another is known as implicit type casting.
Syntax:
$result = $var1 + $var2;  
---------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------

2. Explicit Type Casting (Manual):-
- manually convert a variable from one type to another is called explicit type casting.
Syntax:
$var = (type) $variable;

---------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------
-->


<?php

# Implicit Type Casting (Automatic)
$int = 10;        // integer
$float = 5.5;     // float
$text = "12";     // string

$result = $int + $float + $text;
echo $result;        // 27.5
echo "<br>";
var_dump($result);   // float(27.5)

echo "<hr>";
?>


<?php

# Explicit Type Casting (Manual)
$value = "123.45";
echo "Original Value: $value <br>";
echo "Original Type: " . gettype($value) . "<hr>";


# Casting to Integer
$intValue = (int) $value;
echo "Value: $intValue <br>";
echo "Type: " . gettype($intValue) . "<hr>";


# Casting to Float
$fValue = (float) $value;
echo "Value: $fValue <br>";
echo "Type: " . gettype($fValue) . "<hr>";


# Casting to boolean
$bValue = (bool) $value;
echo "Value: $bValue<br>";
echo "Type: " . gettype($bValue) . "<hr>";


# Casting to string
$sValue = (string) $value;
echo "Value: $sValue<br>";
echo "Type: " . gettype($sValue) . "<hr>";


# Casting to array
$var = "Hello World";
$arrayVar = (array) $var;

print_r($arrayVar);
echo "<br>";
echo "Type: " . gettype($arrayVar) . "<hr>";


?>