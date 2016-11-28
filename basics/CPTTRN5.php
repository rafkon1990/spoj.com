<?php

$newLine = "\n";
$dot = '.';
$star = '*';

function generateInterwal($c, $s) {
    global $star;
    
    $sum = $c * ($s + 1) + 1;
    return str_repeat($star, $sum);
}

function generateGrid($c, $s) {
    global $newLine, $dot, $star;
    $stars = generateInterwal($c, $s);
    $out = '';
    
    for ($i = 0; $i < $s; $i++) {
        $out .= $star;
        
        for ($j = 0; $j < $c; $j++) {
            $odd = ($j + 1) % 2 === 1;
            $dots = $s;
            $pre_dots = $i;
            $post_dots = $s - $i - 1;
            
            if (!$odd) {
                $char = '\\';
            } else {
                $tmp = $pre_dots;
                $pre_dots = $post_dots;
                $post_dots  = $tmp;
                $char = '/';
            }
            $out .= str_repeat($dot, $pre_dots) . $char . str_repeat($dot, $post_dots) . $star;
        }
        if ($i < $s - 1) {
            $out .= $newLine;
        }
    }
    
    return $out;
}
function generateGridOdd($c, $s) {
    global $newLine, $dot, $star;
    $stars = generateInterwal($c, $s);
    $out = '';
    
    for ($i = 0; $i < $s; $i++) {
        $out .= $star;
        
        for ($j = 0; $j < $c; $j++) {
            $odd = ($j + 1) % 2 === 1;
            $dots = $s;
            $pre_dots = $i;
            $post_dots = $s - $i - 1;
            
            if ($odd) {
                $char = '\\';
            } else {
                $tmp = $pre_dots;
                $pre_dots = $post_dots;
                $post_dots  = $tmp;
                $char = '/';
            }
            $out .= str_repeat($dot, $pre_dots) . $char . str_repeat($dot, $post_dots) . $star;
        }
        if ($i < $s - 1) {
            $out .= $newLine;
        }
    }
    
    return $out;
}

function generatePattern($l, $c, $s) {
    global $newLine;
    
    $out = "";
    $stars = generateInterwal($c, $s);
    $grid = generateGrid($c, $s);
    $gridOdd = generateGridOdd($c, $s);
    $out .= $stars . $newLine;
    
    $lTemp = $l;
    while ($lTemp--) {
        $odd = ($l - $lTemp) % 2 === 1;
        
        if(!$odd) {
            $out .= $grid . $newLine . $stars . $newLine;
        } else {
            $out .= $gridOdd . $newLine . $stars . $newLine;
        }
    }
    
    return $out;
}

$out = "";

fscanf(STDIN,"%d",$t);

// $t = $_GET['t'];
// $l = $_GET['l'];
// $c = $_GET['c'];
// $s = $_GET['s'];

while ($t--) {
    fscanf(STDIN, "%d %d %d", $l, $c, $s);
    
    $out .= generatePattern($l, $c, $s);
    
    if($t > 0) {
        $out .= $newLine;
    }
}

echo $out;

?>