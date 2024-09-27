<?php

$num1 = 10;
$num2 = 5;
$operator = "5"; 


if ($operator == "+") {
    $result = $num1 + $num2;
} elseif ($operator == "-") {
    $result = $num1 - $num2;
} elseif ($operator == "*") {
    $result = $num1 * $num2;
} elseif ($operator == "/") {
    if ($num2 != 0) { 
        $result = $num1 / $num2;
    } else {
        $result = "undefined (division by zero)";
    }
} else {
    $result = "invalid operator!";
}

echo "Result: $result";
?>
