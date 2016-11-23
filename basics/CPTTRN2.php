<?php

/*

Using two characters: . (dot) and * (asterisk) print a frame-like pattern.

Input

You are given:
t - the number of test cases and for each of the test cases two positive integers:
l - the number of lines
c - the number of columns of a frame

Output

For each of the test cases output the requested pattern (please have a look at the example).
Use one line break in between successive patterns.

Example

Input:
3
3 1
4 4
2 5

Output:
*
*
*

****
*..*
*..*
****


*****
*****

*/

function generateRow($length, $inherit = false){
    if($length < 3) {
        return (
        ($length === 2) ?
        "**" :
        (
        ($length === 1)
        ?"*"
        :""
        )
        );
    }
    
    if(!$inherit) {
        return str_repeat("*", $length);
    }
    
    $side = "*";
    return $side . str_repeat(".", $length-2).$side;
}

fscanf(STDIN,"%d",$loops);
$out = "";

while($loops-- > 0) {
    fscanf(STDIN, "%d %d", $rows, $cols);
    $rowsTemp = $rows;
    
    $row =  generateRow($cols, false);
    $rowInherit = generateRow($cols, true);
    while($rowsTemp) {
        if($cols < 3 OR $rows < 3) {
            $out .= $row;
        } else {
            $out.= ($rowsTemp % $rows === 0 OR $rowsTemp == 1) ? $row : $rowInherit;
        }
        $rowsTemp--;
        $out .= "\n";
    }
    
    if($loops>0) {
        $out .= "\n";
    }
}

echo $out;

?>