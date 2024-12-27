<!-- 
---------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------
What is Magic Constants?
- Magic constants are predefined constants in PHP that provide information about the script's environment. 
---------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------
List of Magic Constants:
__LINE__	The current line number in the script.
__FILE__	The full path and name of the current file.
__DIR__	The directory of the current file.

---------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------
-->


<?php
echo "This is line number " . __LINE__;  // 20
echo"<hr>";

echo "This file is located at: " . __FILE__;  // C:\xampp\htdocs\Ashish\PHP\8_Magic Constants.php
echo"<hr>";

echo "The current directory is: " . __DIR__;  // C:\xampp\htdocs\Ashish\PHP
echo"<hr>";


?>