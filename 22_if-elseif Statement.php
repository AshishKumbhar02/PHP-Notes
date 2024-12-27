<!--
---------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------- 
3. if-elseif Statement: This statement allows to check multiple conditions.

Syntax:
if (condition1) {
    // Code to be executed if condition1 is true
} elseif (condition2) {
    // Code to be executed if condition2 is true
} else {
    // Code to be executed if none of the conditions are true
}

---------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------- 
-->

<?php

$score = 75;
echo "Score :", $score . "<br>";

if ($score > 100) {
    echo "Please Enter Valid Score.";
} elseif ($score <= 100 && $score >= 90) {
    echo "Grade: O.";
} elseif ($score < 90 && $score >= 70) {
    echo "Grade: A.";
} elseif ($score < 70 && $score >= 60) {
    echo "Grade: B.";
} elseif ($score < 60 && $score >= 50) {
    echo "Grade: C.";
} elseif ($score < 50 && $score >= 35) {
    echo "Grade: D.";
} else {
    echo "Grade: Fail.";
}
?>