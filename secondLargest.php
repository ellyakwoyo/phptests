<?php
function secondLargest($arr) {
    $arr = array_unique($arr);
    rsort($arr);
    return $arr[1] ?? null;
}

$nums = [10, 20, 4, 45, 99, 99];
echo secondLargest($nums); 
?>
