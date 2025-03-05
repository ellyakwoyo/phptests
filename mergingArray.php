<?php
function mergeSorted($arr1, $arr2) {
    return array_merge($arr1, $arr2);
}

$a = [1, 3, 5];
$b = [2, 4, 6];
print_r(mergeSorted($a, $b));
?>
