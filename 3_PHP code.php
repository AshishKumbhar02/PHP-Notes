<!-- 
---------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------- 
PHP Tags:
- PHP code is written inside PHP tags. 
- These tags tell the server where the PHP code starts and ends.

Standard Tags:
<?php
// PHP code here
?>
---------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------
PHP Statements: Each PHP statement ends with a semicolon (;).
Example:
<?php
//   echo "Hello, World!";  // Ends with a semicolon
?>
---------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------
comments are used to add notes or explanations within the code. 
PHP supports three types of comments:

1. Single-line comments (// or #)
// This is a single-line comment
# This is another single-line comment

2. Multi-line comments (/* */)
/* This is a multi-line comment
   that spans across multiple lines 
*/


3. Doc comments (/** */)
/** 
 * Description of the function or class.
 * 
 * 
*/
---------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------
-->
<?php
# Write a basic PHP script that displays "Hello, World!".
echo "Hello, World!";       // Hello, World!
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Embedding PHP in HTML</title>
</head>
<body>
    <h1>Welcome</h1>
    <p><?php echo "This is PHP inside HTML."; ?></p>
</body>
</html>



<?php
# Write a PHP script to display current date and time.

// Set the timezone to Mumbai (Asia/Kolkata)
date_default_timezone_set('Asia/Kolkata');

// Get current date and time
$currentDateTime = date('Y-m-d H:i:s');

// Display the current date and time
echo "Current date and time in Mumbai: " . $currentDateTime;


?>
