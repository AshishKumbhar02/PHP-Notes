<!-- 
---------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------
What is Constants?
- A constant is a value that does not change during the execution of the script. 

How to Define Constants:-
1) Using define() Function
2) Using const Keyword
---------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------
1) Using define() Function:
Syntax:
define("CONSTANT_NAME", "value");

Example:
define("SITE_NAME", "My Website");
echo SITE_NAME;    // Output: My Website
---------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------
2) Using const Keyword: 
Syntax:
const CONSTANT_NAME = "value";

Example:
const PI = 3.14159;
echo PI; // Output: 3.14159
---------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------
Difference Between Constants and Variables.

Constant	
- A fixed value that cannot be changed after defining.
- Use define() or const Keywork.    e.g., define("NAME", "value");
- Immutable (value cannot be changed once defined).
- No $ (e.g., CONSTANT_NAME).

Variable
- A value that can be changed during the script execution.
- Use $.    $name = "value";
- Mutable (value can be reassigned).
- Starts with $ (e.g., $variable).

---------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------
-->


<?php
# Using define()
define("GREETING", "Hello, World!");
echo GREETING; // Hello, World!

echo "<hr>";

# Using const Keyword
const MAX_USERS = 100;
echo MAX_USERS;  //  100



?>