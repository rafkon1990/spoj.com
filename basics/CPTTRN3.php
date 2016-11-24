<?php

$out = "";
$newLine = "\n";

function generateSideLine($size) {
    return str_repeat("***", $size) . "*";
}

function generateGrid($size) {
    global $newLine;
    $out = "";
    $out .= generateSideLine($size);
    $out .= str_repeat(($newLine . str_repeat("*..", $size)."*"), 2) . $newLine;
    
    return $out;
}

fscanf(STDIN,"%d",$t);

// $t = $_GET["t"];
// $r = $_GET["r"];
// $c = $_GET["c"];

while($t-- > 0) {
    fscanf(STDIN, "%d %d", $r, $c);
    $rTemp = $r;
    $grid = generateGrid($c);

    while($rTemp--) {
        $out .= $grid;
    }

    $out .= generateSideLine($c) . $newLine;
    
    if($t > 0) {
        $out .= "\n";
    }
}

echo $out;