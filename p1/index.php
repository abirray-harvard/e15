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

function letterShift($inputStr)
{
    $str = '';
    foreach(str_split($inputStr) as $char)
    {
        $str .= chr(ord($char)+1);
    }
    return $str;
}

echo "<br>Test: letterShift<br>";
echo "The zoo is open => " . letterShift("The zoo is open") . "<br>";
echo "foobar@1 => " . letterShift("foobar@1") . "<br>";
echo "aAb => " . letterShift("aAb") . "<br>"; 

function shuffleText($inputStr,$seed=0)
{
    $str = '';
    if($seed==0) srand();
    else srand($seed);
    foreach(explode(' ',$inputStr) as $word)
    {
        $str .= str_shuffle($word);
        $str .= ' ';
    }
    $str .= chr(8);
    return $str;
}

echo "<br>Test: shuffleText<br>";
echo "The zoo is open => " . shuffleText("The zoo is open") . "<br>";
echo "The zoo is open => " . shuffleText("The zoo is open",1234) . "(using a seed value of 1234)<br>";
echo "the quick brown fox jumps over the lazy dog => " . shuffleText("the quick brown fox jumps over the lazy dog") . "<br>";

require 'index-view.php';
