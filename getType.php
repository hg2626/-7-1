<?php

$str = "文字列です。"; // $strはstring（文字列）型
$int_number = 4; // $int_numberはinteger（整数）型
$arr = array(1,2,3,4); // $arrはarray（配列）型
$bool=true;
$null=NULL;
echo gettype($str) . PHP_EOL;
echo gettype($int_number) . PHP_EOL;
echo gettype($arr) . PHP_EOL;
echo gettype($bool) . PHP_EOL;
echo gettype($null) . PHP_EOL;
?>