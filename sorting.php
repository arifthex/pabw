<?php  
	$i=0;
	$data = ["lanirne","aduh","qifuat","toda","anevi","samid","kifuat"];
	sort($data);
	foreach ($data as $value) {
		$i++;
		echo "$i. $value <br>";
	}
?>