<?php

if(basename(__FILE__) == basename($_SERVER['SCRIPT_FILENAME'])) {
    die;
}

$result = mysql_query("SET NAMES 'utf8' ") or die("");
$query = "delete from rating_all where id=".Param('id');
$result = mysql_query ($query) or die ("");

header ("Location:api.php?method=allview");

?>