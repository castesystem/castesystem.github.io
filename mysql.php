<?php

// Mysql settings

$user			= "id15780_dingleberry802";
$password	= "ios7beta";
$database	= "id15780_girls";
$host			= "localhost";

mysql_connect($host,$user,$password);
mysql_select_db($database) or die( "Unable to select database");

?>