﻿<?php

if(basename(__FILE__) == basename($_SERVER['SCRIPT_FILENAME'])) {
    die;
}


if(!isset($_GET['visit'])){
    mysql_query("update rating_counter set counter = counter +1 where id=1 limit 1");
}else{
    mysql_query("update rating_counter set counter = counter +1 where id=3 limit 1");
}

?>