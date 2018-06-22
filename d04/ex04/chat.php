<?php

session_start();

if ($_SESSION['loggued_on_user']) {
	if (file_exists("../private") && file_exists("../private/chat")) {
		$chat = unserialize(file_get_contents("../private/chat"));
		foreach($chat as $val)
			echo "[".date('H:i', $val['time'])."] <b>".$val['login']."<b>: ".$val['msg']."<br />";
	}
}
else
	echo "ERROR", PHP_EOL;

?>
