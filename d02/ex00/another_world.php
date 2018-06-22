#!/nfs/2016/s/sjones/.brew/Cellar/php71/7.1.14_25/bin/php
<?php

if ($argc > 1) {
	$str = preg_replace('/[ \t]+/', ' ', trim($argv[1]));
	echo $str, PHP_EOL;
}

?>
