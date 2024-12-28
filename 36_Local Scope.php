<?php

# A variable declared inside a function is only available inside that function.
function showY() {
    $y = 10;  // Local variable
    echo $y;  // Works fine inside the function
}

showY();  // Output: 10
// echo $y;  // Error: $y is not defined outside the function

echo "<hr>";


?>