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

**************** = (w + 1) *  (2 + 1) 
*..*..*..*..*..* = h (2) powtórzeń liń
*..*..*..*..*..* = c (5) powtórzeń kolumn
.. (w) ilość kropek
*/

$out = "";
$newLine = "\n";

function generateSideLine($size) {
    return str_repeat("***", $size) . "*";
}

function generateGrid($r, $h, $w) {
    global $newLine;
    $out = "";
    

    
    return $out;
}

// fscanf(STDIN,"%d",$t);

$t = $_GET["t"];
$r = $_GET["r"];
$c = $_GET["c"];
$h = $_GET["h"];
$w = $_GET["w"];

while($t-- > 0) {
    // fscanf(STDIN, "%d %d %d %d", $r, $c, $h, $w);
    $rTemp = $r;

    while($rTemp--) {
       
    }
    
    if($t > 0) {
        $out .= "\n";
    }
}

echo $out;

?>