#!/nfs/2016/s/sjones/.brew/Cellar/php71/7.1.14_25/bin/php
<?php

if ($argc != 2) {
	echo "Incorrect Parameters", PHP_EOL;
	exit;
}
$arg = trim($argv[1]);
$a = preg_replace('\d+', '', $arg);
$op = preg_replace('/[\+-\*/\%]./', '', $arg);
$b = preg_replace('[0-9]$', '', $arg);
echo "{".$a."}{".$op."}{".$b."}",PHP_EOL;
switch ($op) {
	case "+":
		$a += $b;
		break;
	case "-":
		$a -= $b;
		break;
	case "*":
		$a *= $b;
		break;
	case "/":
		$a /= $b;
		break;
	case "%":
		$a %= $b;
		break;
}
echo $a, PHP_EOL;

?>
