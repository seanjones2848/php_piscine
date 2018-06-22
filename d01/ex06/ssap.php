#!/nfs/2016/s/sjones/.brew/Cellar/php71/7.1.14_25/bin/php
<?php

if ($argc > 1) {
	$array = [];
	for ($i = 1; $i < $argc; $i++) {
		$array = array_merge($array, preg_split("/[\s]+/", trim($argv[$i])));
	}
	sort($array);
	foreach ($array as &$poop)
		echo $poop, PHP_EOL;
}

?>
