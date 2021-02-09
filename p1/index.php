<?php

function isPalindrome($inputStr)
{
    $str = preg_replace('/[^a-z]/i','',strtolower($inputStr));
    if(strcmp($str,strrev($str))!=0) return false;
    else return true;
}

echo isPalindrome("racecar")==true?"P":"N";
echo isPalindrome("Racecar")==true?"P":"N";
echo isPalindrome("racecar!")==true?"P":"N";
echo isPalindrome("!racecar!")==true?"P":"N";
echo isPalindrome("Hello World")==true?"P":"N";

require 'index-view.php';
