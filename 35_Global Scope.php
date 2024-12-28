<?php

$x = 5;  // Global variable
function showX() {
    // echo $x;  // This will give an error
}
echo $x;  // Works because $x is global
echo "<hr>";




# Can be used anywhere outside functions. To use inside a function, use global.
$y = 10;
function show() {
    global $y;  // Access the global variable
    echo $y;  // 10
}
show();
echo "<hr>";


?>