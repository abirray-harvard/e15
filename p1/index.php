<?php

function isPalindrome($inputStr)
{
    $str = preg_replace('/[^a-z]/i','',strtolower($inputStr));
    if(strcmp($str,strrev($str))!=0) return "No";
    else return "Yes";
}

echo "<br>Test: isPalindrome<br>";
echo "racecar => " . isPalindrome("racecar") . "<br>";
echo "Racecar => " . isPalindrome("Racecar") . "<br>";
echo "racecar! => " . isPalindrome("racecar!") . "<br>";
echo "!racecar! => " . isPalindrome("!racecar!") . "<br>";
echo "Hello World => " . isPalindrome("Hello World") . "<br>";

function vowelCount($inputStr)
{
    $str = preg_replace('/[^aeiou]/i','',$inputStr);
    return strlen($str);
}

echo "<br>Test: vowelCount<br>";
echo "the quick brown fox jumps over the lazy dog => " . vowelCount("the quick brown fox jumps over the lazy dog") . "<br>";
echo "Hll Wrld => " . vowelCount("Hll Wrld") . "<br>";
echo "AeIoU => " . vowelCount("AeIoU") . "<br>";

require 'index-view.php';
