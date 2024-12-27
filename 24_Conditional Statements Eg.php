
<?php

echo "<h3>Check if a number is even or odd.</h3>";
$num = 10;

if ($num % 2 == 0) {
    echo "$num is Even Number.";
} else {
    echo "$num is Odd Number.";
}
echo "<hr>";


echo "<h3>Check if a person is eligible to vote.</h3>";
$age = 20;

if ($age >= 18) {
    echo "You are eligible to vote.";
} else {
    echo "You are not eligible to vote.";
}
echo "<hr>";


echo "<h3>Check if a character is a vowel or consonant.</h3>";
$char = 'a';

if ($char == 'a' || $char == 'e' || $char == 'i' || $char == 'o' || $char == 'u') {
    echo " '$char' is a vowel.";
} else {
    echo " '$char' is a consonant.";
}
echo "<hr>";



echo "<h3>Check if a year is a leap year.</h3>";
$year = 2024;

if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
    echo "$year is a leap year.";
} else {
    echo "$year is not a leap year.";
}
echo "<hr>";



echo "<h3>Check if a number is divisible by 5 using.</h3>";
$number = 12;

if ($number % 5 == 0) {
    echo "$number is divisible by 5.";
} else {
    echo "$number is not divisible by 5.";
}
echo "<hr>";



echo "<h3>Check if a string is a palindrome.</h3>";
$string = "Ashish";
$reversedString = strrev($string);

if ($string == $reversedString) {
    echo "$string is a palindrome.";
} else {
    echo "$string is not a palindrome.";
}
echo "<hr>";



echo "<h3>Check if a number is positive, negative, or zero.</h3>";
$number = 5;

if ($number > 0) {
    echo "The number is positive.";
} elseif ($number < 0) {
    echo "The number is negative.";
} else {
    echo "The number is zero.";
}
echo "<hr>";



echo "<h3>Find the largest of three numbers.</h3>";
$a = 15;
$b = 20;
$c = 45;

if ($a > $b && $a > $c) {
    echo "$a is the largest number.";
} elseif ($b > $c) {
    echo "$b is the largest number.";
} else {
    echo "$c is the largest number.";
}
echo "<hr>";



echo "<h3>Categorize an age group.</h3>";
$age = 18;

if ($age < 13) {
    echo "$age is Child age.";
} elseif ($age >= 13 && $age <= 19) {
    echo "$age is Teenager age.";
} elseif ($age >= 20 && $age <= 35) {
    echo "$age is Young Adult age.";
} else {
    echo "$age is Adult age.";
}
echo "<hr>";



echo "<h3>Simple Calculator.</h3>";
$num1 = 12;
$num2 = 4;
$op = "+";
switch($op){
    case "+":
        $res = $num1 + $num2;
        echo "Addition : $num1 + $num2 = ". $res;
        break;
    case "-":
        $res = $num1 - $num2;
        echo "Subtraction : $num1 - $num2 = ". $res;
        break;
    case "*":
        $res = $num1 * $num2;
        echo "Multiplication : $num1 * $num2 = ". $res;
        break;
    case "/":
        if($num2 != 0){
            $res = $num1 / $num2;
            echo "Division : $num1 / $num2 = ". $res;
        }
        else{
            echo "Division by zero is not allow.";
        }
        break;
    default:
    echo "Invalid Operator. ";

}
echo"<hr>";





echo "<h3>Grade Calculation.</h3>";
/* 

Marks Range	    Grade
90-100	         O
80-89	         A
70-79	         B
60-69	         C
50-59	         D
35-49	         E
Below 35	    Fail

*/
$marks = 80; 
$grade = '';

switch (true) {
    case ($marks >= 90 && $marks <= 100):
        $grade = 'O';
        break;
    case ($marks >= 80 && $marks < 90):
        $grade = 'A';
        break;
    case ($marks >= 70 && $marks < 80):
        $grade = 'B';
        break;
    case ($marks >= 60 && $marks < 70):
        $grade = 'C';
        break;
    case ($marks >= 50 && $marks < 60):
        $grade = 'D';
        break;
    case ($marks >= 35 && $marks < 50):
        $grade = 'E';
        break;
    case ($marks < 35 && $marks >= 0):
        $grade = 'Fail';
        break;
    default:
        $grade = 'Invalid marks entered.';
        break;
}

echo "Marks: $marks <br> Grade: $grade";



?>