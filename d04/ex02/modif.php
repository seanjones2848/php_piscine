<?php

if ($_POST['login'] && $_POST['oldpw'] && $_POST['newpw'] && $_POST['submit'] && $_POST['submit'] === "OK") {
	$account = unserialize(file_get_contents("../private/passwd"));
	if ($account) {
		$error = 1;
		foreach($account as $key=>$val) {
			if ($val['login'] === $_POST['login'] && $val['passwd'] === hash('whirlpool', $_POST['oldpw'])) {
				$account[$key]['passwd'] = hash('whirlpool', $_POST['newpw']);
				$error = 0;
			}
			if (!$error) {
				file_put_contents("../private/passwd", serialize($account));
				echo "OK", PHP_EOL;
			}
			else
				echo "ERROR", PHP_EOL;
		}
	}
	else
		echo "ERROR", PHP_EOL;
}
else
	echo "ERROR", PHP_EOL;

?>
