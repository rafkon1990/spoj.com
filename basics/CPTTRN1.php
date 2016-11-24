<?php

function generateRow($len, $parzysta){
	$s1 = "*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.";
	$s2 = ".*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*";

	return ($parzysta) ? substr($s2, 0, $len) : substr($s1, 0, $len); 
}

fscanf(STDIN,"%d",$t);
$out = "";

while($t-- > 0) {
	fscanf(STDIN, "%d %d", $r, $c);
	$parzysta = FALSE;
	
	while($r--) {
		$row = generateRow($c, $parzysta);
		$out .= $row;
		$out .= "\n";
		
		$parzysta = !$parzysta;
	}	

	if($t>0) {
		$out .= "\n";
	}
}

echo $out;

?>