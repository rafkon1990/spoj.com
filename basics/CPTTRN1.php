<?php

function generateRow($len, $parzysta){
	$s1 = "*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.";
	$s2 = ".*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*";

	return ($parzysta) ? substr($s2, 0, $len) : substr($s1, 0, $len); 
}

fscanf(STDIN,"%d",$loops);
$out = "";

while($loops-- > 0) {
	fscanf(STDIN, "%d %d", $rows, $cols);
	$parzysta = FALSE;
	
	while($rows--) {
		$row = generateRow($cols, $parzysta);
		$out .= $row;
		$out .= "\n";
		
		$parzysta = !$parzysta;
	}	

	if($loops>0) {
		$out .= "\n";
	}
}

echo $out;

?>