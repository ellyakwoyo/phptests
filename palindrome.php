<?php
function isPalindrome($str) {
    return strtolower($str) === strtolower(strrev($str));
}

echo isPalindrome("madam") ? "Palindrome" : "Not a Palindrome";
?>
