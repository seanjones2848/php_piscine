#!/nfs/2016/s/sjones/.brew/Cellar/php71/7.1.14_25/bin/php
<?php

if ($argc > 1) {
	$array = preg_split("/[\s]+/", trim($argv[1]));
	$first = array_shift($array);
	array_push($array, $first);
	$i = 1;
	foreach($array as &$poop) {
		echo $poop;
		if (++$i <= count($array))
			echo " ";
	}
	echo PHP_EOL;
}

?>
