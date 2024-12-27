<!-- 
---------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------- 
8. Bitwise Operators: They work with the binary (0s and 1s) form of numbers.

&: AND - '1' if both bits are '1'.
|: OR - '1' if at least one bit is '1'.
^: XOR - '1' if bits are different.
~: NOT - Inverts all bits.
<<: Left Shift - Moves bits left and adds '0s' on the right.
---------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------- 
-->

<?php

$a = 5;   // Binary: 0101
$b = 3;   // Binary: 0011

# Bitwise AND
$result = $a & $b;  // Binary: 0001 (Decimal: 1)
echo "Bitwise AND of $a & $b = $result"; // 1
echo"<hr>";


# Bitwise OR
$result = $a | $b; // Binary: 0111 (Decimal: 7)
echo "Bitwise OR of $a | $b = $result"; // 7
echo"<hr>";


# Bitwise XOR
$result = $a ^ $b; // Binary: 0110 (Decimal: 6)
echo "Bitwise XOR of $a ^ $b = $result"; // 6
echo"<hr>";


# Bitwise NOT
$c = 3;   
# ~c = -(c + 1) = -(3 + 1) = - 4
$result = ~$c; // (Decimal: -4)
echo "Bitwise NOT of ~$c = $result"; // -4
echo"<hr>";


# Bitwise Left Shift (<<)
$num = 5; // Binary: 0101
// Formula: Result = Number × (2 Positions)
$res = $num << 2;  
# Decimal: 5 * 2 * 2 = 20                        
echo "Left Shift of $num << 2 = $res"; // 20
echo"<hr>";




?>