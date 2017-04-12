<?php
/*if(!isset($_SESSION))
{
	@session_start();
}*/

	$mysql_ip = 'localhost';
	$mysql_user = 'localeca';
	$mysql_pass = 'v^9Oz*2Xc%';
	$mysql_db = 'localeca_HTML5CanvasBannerEditor';

	$conn = mysql_connect ($mysql_ip, $mysql_user, $mysql_pass) or die ("I cannot connect to the database because: " . mysql_error());
	mysql_select_db ($mysql_db) or die ("I cannot select the database '$dbname' because: " . mysql_error());
	date_default_timezone_set('GMT');
?>
