<?php
    $connection = mysql_connect("localhost", "admin", "12345");
    $connectedDe = mysql_select_db('wptest');
    if(!$connection || $connectedDe) {
        exit (mysql_error());
    }	
?>