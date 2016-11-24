<?php

function generateRow($length, $inherit = false){
    if(!$inherit OR $length < 3) {
        return str_repeat("*", $length);
    }
    
    return "*" . str_repeat(".", $length-2) . "*";
}

fscanf(STDIN,"%d",$t);
$out = "";

while($t-- > 0) {
    fscanf(STDIN, "%d %d", $r, $c);
    $rTemp = $r;
    
    $row =  generateRow($c, false);
    $rowInherit = generateRow($c, true);
    while($rTemp) {
        if($c < 3 OR $r < 3) {
            $out .= $row;
        } else {
            $out.= ($rTemp % $r === 0 OR $rTemp == 1) ? $row : $rowInherit;
        }
        
        $rTemp--;
        $out .= "\n";
    }
    
    if($t > 0) {
        $out .= "\n";
    }
}

echo $out;

?>