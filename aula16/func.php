<?php
    function calc($n1, $n2, $op) {
        if ($op == "+") {
            $n3 = $n1 + $n2;
            echo "$n1 + $n2 = $n3";
        }
        if ($op == "-") {
            $n3 = $n1 - $n2;
            echo "$n1 - $n2 = $n3";
        }
        if ($op == "*") {
            $n3 = $n1 * $n2;
            echo "$n1 * $n2 = $n3";
        }
        if ($op == "/") {
            $n3 = $n1 / $n2;
            echo "$n1 / $n2 = $n3";
        }
    }
?>