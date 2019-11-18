<?php  
	$x  = 10;

	function tukar(&$nilai1){
		$nilai2 = 20;
		$nilai1 = $nilai2; 
	}
	tukar($x);
	echo $x;
?>