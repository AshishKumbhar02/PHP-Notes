<!-- 
---------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------  
1. break Statement:- It is used to terminate the current loop or switch statement.
Syntax:
break;

2. continue Statement:- It is used to skip the current iteration of a loop and move to the next iteration.
Syntax:
continue;
---------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------- 
-->

<?php
# Break Statement
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        break;
    }
    echo $i . "<br>";
}
echo "<hr>";



# Continue Statement
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        continue;
    }
    echo $i . "<br>";
}


?>