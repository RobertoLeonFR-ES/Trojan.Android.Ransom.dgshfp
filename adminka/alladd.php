<?php

if(basename(__FILE__) == basename($_SERVER['SCRIPT_FILENAME'])) {
    die;
}


$date = Param('date');
$country = Param('country');
$code = Param('code');
$imei = Param('imei');

$result = mysql_query("SET NAMES 'utf8' ");
$query = "insert into rating_all VALUES (NULL,'".$date."','".$code."','".$country."', '0', '$imei', '0')";
$result = mysql_query ($query) or die ("DB ERROR");

echo json_encode(array('result' => 1));

?>