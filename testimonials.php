<?php
    $connection = mysql_connect("localhost", "admin", "12345");
    $connectedDe = mysql_select_db('wptest');
    if(!$connection || $connectedDe){
        mysql_error();
    }

    if (isset($_POST['send'])) {

        $name = $_POST['name'];
        $feedback = $_POST['feedback'];
        
        mysql_query("
            INSERT INTO testimonials (name, feedback)
            VALUES ('$name', '$feedback')
        ");
        
        mysql_close();
    }	
?>