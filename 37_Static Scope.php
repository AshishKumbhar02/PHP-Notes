<?php

# Inside a function, but remembers its value between calls.
function myFunction() {
    static $counter = 0;  // Static variable
    $counter++;
    echo $counter . "<br>";  // Outputs 1, then 2, and so on.
}

myFunction();  // 1
myFunction();  // 2
myFunction();  // 3
myFunction();  // 4
echo "<hr>";

?>