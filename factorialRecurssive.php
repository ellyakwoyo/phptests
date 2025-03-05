<?php
function factorial($n) {
    return ($n <= 1) ? 1 : $n * factorial($n - 1);
}

echo factorial(5); 
?>
