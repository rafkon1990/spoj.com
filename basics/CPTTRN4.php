<?php

/*

Using two characters: . (dot) and * (asterisk) print a grid-like pattern.

Input

You are given 
t - the number of test cases and for each of the test cases four positive integers: 
l - the number of lines, 
c - the number of columns in the grid; 
h and w - the high and the with of the single rectangle.

Output

For each of the test cases output the requested pattern (please have a look at the example). Use one line break in between successive patterns.

Example

Input:
3
3 1 2 1
4 4 1 2
2 5 2 2

Output:
3 1 2 1
***
*.*
*.*
***
*.*
*.*
***
*.*
*.*
***

4 4 1 2
*************
*..*..*..*..*
*************
*..*..*..*..*
*************
*..*..*..*..*
*************
*..*..*..*..*
*************

****************
*..*..*..*..*..*
*..*..*..*..*..*
****************
*..*..*..*..*..*
*..*..*..*..*..*
****************
r c w h
2 5 2 2

**************** = (w + 1) * c +1
*..*..*..*..*..* = h (2) powtórzeń liń
*..*..*..*..*..* = c (5) powtórzeń kolumn
.. (w) ilość kropek
*/

$out = "";
$newLine = "\n";

function generateSideLine($size) {
    return str_repeat("***", $size) . "*";
}

function generateStarsRow($c, $w) {
    return str_repeat("*", ($w + 1) * $c + 1);
}

function generateRow($c, $w) {
    return str_repeat("*" . str_repeat("." , $w), $c) . "*";
}

fscanf(STDIN,"%d",$t);

// $t = $_GET["t"];
// $r = $_GET["r"];
// $c = $_GET["c"];
// $h = $_GET["h"];
// $w = $_GET["w"];

while($t-- > 0) {
    fscanf(STDIN, "%d %d %d %d", $r, $c, $h, $w);
    $rTemp = $r;
    $stars = generateStarsRow($c, $w) . $newLine;
    $row = generateRow($c, $w) . $newLine;
    while($rTemp--) {
       $out .= $stars;
       for($i = $h; $i > 0; $i--) {
           $out .= $row;
       }
    }
    $out .= $stars;
    
    if($t > 0) {
        $out .= $newLine;
    }
}

echo $out;

?>