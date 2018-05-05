<?php

	$host = "localhost";
	$user = "root";
	$pw = "";
	$database = "project01";

	mysql_connect($host, $user, $pw) or die ("Can't connect mysql");
	mysql_select_db($database) or die ("Can't select database");
	mysql_query("SET NAMES UTF8");

?>