<?php

	$host='localhost';
	$user = 'root';
	$pass = '';
	$db = 'test';

	$db = new mysqli("$host", "$user", "$pass", "$db") or die("Unabe to connect");
?>
