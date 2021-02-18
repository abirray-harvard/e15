<?php

session_start();

function isPalindrome($inputStr)
{
    $str = preg_replace('/[^a-z]/i','',strtolower($inputStr));
    if(strcmp($str,strrev($str))!=0) return "No";
    else return "Yes";
}

function vowelCount($inputStr)
{
    $str = preg_replace('/[^aeiou]/i','',$inputStr);
    return strlen($str);
}

function letterShift($inputStr)
{
    $str = '';
    foreach(str_split($inputStr) as $char)
    {
        $str .= chr(ord($char)+1);
    }
    return $str;
}

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

$inputString = $_GET['inputString'];

$isPalindrome = isPalindrome($inputString);
$vowelCount = vowelCount($inputString);
$letterShift = letterShift($inputString);
$shuffleText = shuffleText($inputString);

var_dump($isPalindrome);
var_dump($vowelCounnt);

$_SESSION['results'] = [
    'inputString' => $inputString,
    'isPalindrome' => $isPalindrome, 
    'vowelCount' => $vowelCount,
    'letterShift' => $letterShift, 
    'shuffleText' => $shuffleText
];

header('Location: index.php');