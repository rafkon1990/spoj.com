<?php

$newLine = "\n";
$space = ".";
$cross = "+";
$horizontal = "-";
$vertical = "|";

function czyLiniaPionowa($index, $cols, $w) {
    return ($index%$cols + 1) % ($w + 1) === 0;
}

function czyLiniaPozioma($index, $cols, $h) {
    return (floor($index / $cols) + 1) % ($h + 1) === 0;
}


function generateGrid($l, $c, $h, $w, $cols, $rows) {
    global $space, $newLine, $cross, $horizontal, $vertical;
    $index = 0;
    $out = '';
    
    for($i = 0; $i < $rows; $i++) {
        for($j = 0; $j < $cols; $j++) {
            if(czyLiniaPionowa($index, $cols, $w)) {
                if(czyLiniaPozioma($index, $cols, $h)) {
                    $out.= $cross;
                } else {
                    $out.= $vertical;
                }
            } else if(czyLiniaPozioma($index, $cols, $h)) {
                $out.= $horizontal;
            } else {
                $out .= $space;
            }

            $index++;
        }
        $out .= $newLine;
    }
    return $out;
}

$out = "";

fscanf(STDIN,"%d",$t);

// $t = $_GET['t'];
// $l = $_GET['l']; # vertical lines
// $c = $_GET['c']; # horizontal lines
// $h = $_GET['h']; # dots rows count
// $w = $_GET['w']; # dots count

while ($t--) {
    fscanf(STDIN, "%d %d %d %d", $l, $c, $h, $w);
    $rows = ($l + ($l + 1) * $h);
    $cols = ($c + ($c + 1) * $w);
    
    $out .= generateGrid($l, $c, $h, $w, $cols, $rows);
    
    if ($t > 0) {
        $out .= $newLine;
    }
}

echo $out;

?>