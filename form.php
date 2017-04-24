<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form id="feedback-form" class="bookTraining-modal" method="post" action="form.php" enctype="multipart/form-data">
        <p class="bookTraining-modal__heading">Write your feedback</p>
        <p class="bookTraining-modal__text">Your name:</p><br>
        <input class="bookTraining-modal__input" type="text" name="name" autocomplete="off"><br>
        <p class="bookTraining-modal__text">Feedback:</p><br>
        <textarea class="bookTraining-modal__input feedback-textarea" autocomplete="off" type="text" name="feedback" id="feedback" tabindex="4" maxlength="500" autocomplete="off"></textarea><br>
        <div class="feedback-file-upload">
            <input class="file-upload__input" type="file" name="image" autocomplete="off">
        </div><br>
        <!--<input class="bookTraining-modal__sendButton" type="submit" name="send" value="Send"/>-->
        <button class="bookTraining-modal__sendButton" type="submit" value="Send"/>Send</button>
    </form>

    <?php
        // include_once("connection.php");

        $connection = mysql_connect("localhost", "admin", "12345");
        $connectedDe = mysql_select_db('wptest');
        if(!$connection || $connectedDe){
            mysql_error();
        }

        if (isset($_POST['send'])) {

            $name = $_POST['name'];
            $feedback = $_POST['feedback'];

            mysql_query("
                INSERT INTO 'testimonials' (name, feedback)
                VALUES ('$name', '$feedback')
            ");
            
            mysql_close();
        }	
    ?>
</body>
</html>