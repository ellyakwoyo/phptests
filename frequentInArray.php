<?php
function mostFrequent($arr) {
    $counts = array_count_values($arr);
    arsort($counts);
    return array_key_first($counts);
}

$nums = [3, 3, 2, 1, 3, 2, 4, 2, 2, 2, 5];
echo mostFrequent($nums); 
?>
