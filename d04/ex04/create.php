<?php

if ($_POST['login'] && $_POST['passwd'] && $_POST['submit'] && $_POST['submit'] === "OK") {
	if (!file_exists("../private"))
		mkdir("../private");
	if (!file_exists("../private/passwd"))
		file_put_contents("../private/passwd", null);
	$account = unserialize(file_get_contents("../private/passwd"));
	$error = 0;
	if ($account) {
		foreach($account as $key=>$val) {
			if ($val['login'] === $_POST['login'])
				$error = 1;
		}
	}
	if (!$error) {
		$tmp['login'] = $_POST['login'];
		$tmp['passwd'] = hash('whirlpool', $_POST['passwd']);
		$account[] = $tmp;
		file_put_contents("../private/passwd", serialize($account));
		header('Location: index.html');
		echo "OK",PHP_EOL;
		exit();
	}
	else
		echo "ERROR",PHP_EOL;
}
else
	echo "ERROR",PHP_EOL;

?>
