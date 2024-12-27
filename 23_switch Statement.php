<!--
---------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------- 
4. switch Statement: This statement is used to perform different actions based on the value of a variable.
Syntax:

switch (variable) {
    case value1:
        # Code to be executed if variable == value1
        break;
    case value2:
        # Code to be executed if variable == value2
        break;
    default:
        # Code to be executed if none of the cases match
}
---------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------- 
-->


<?php

$month = 8;
echo "Month No : ", $month . "<br>";
switch ($month) {
    case 1:
        echo "January";
        break;
    case 2:
        echo "February";
        break;
    case 3:
        echo "March";
        break;
    case 4:
        echo "April";
        break;
    case 5:
        echo "May";
        break;
    case 6:
        echo "June";
        break;
    case 7:
        echo "July";
        break;
    case 8:
        echo "August";
        break;
    case 9:
        echo "September";
        break;
    case 10:
        echo "October";
        break;
    case 11:
        echo "November";
        break;
    case 12:
        echo "December";
        break;
    default:
        echo "Invalid month number!";
}



?>