<!--  
---------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------- 
echo Statement:
- Used to display output.
- Works with or without parentheses.
- Does not return any value.
- Can display multiple strings separated by commas.
- Faster than print.

print Statement:
- Also displays output.
- Works with or without parentheses.
- Always returns 1.
- Can only handle one string at a time (no multiple strings).
- Slower than echo.
---------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------

-->

<?php

# Basic usage:
echo "Hello, World!";  // Hello, World!
print "Hello, World!"; // Hello, World!


# Without parentheses:
echo "Welcome to PHP!";  // Welcome to PHP!
print "Welcome to PHP!";  // Welcome to PHP!


# Multiple strings (comma-separated):
echo "PHP", " is", " fun!";      // PHP is fun!


# Cannot use multiple strings (error example):
// print "PHP", " is", " fun!";   // ❌ This will cause an error

# With HTML
echo "<h1>This is a heading</h1>";

# Returns a value:
$result = print "Learning PHP!";
echo $result;   // Outputs: Learning PHP!1

?>