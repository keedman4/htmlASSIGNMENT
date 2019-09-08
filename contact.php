<?php
    $fname = $_POST["firstname"]; //You have to get the form data
    $lname = $_POST["lastname"];
    $email = $_POST["email"];
    $title = $_POST["title"];
    $message = $_POST["message"];
    $file = fopen('contact.txt', 'w+'); //Open your .txt file
    ftruncate($file, 0); //Clear the file to 0bit
    $content = $fname. PHP_EOL .$lname. PHP_EOL .$email. PHP_EOL .$title. PHP_EOL .$message;
    fwrite($file , $content); //Now lets write it in there
    fclose($file ); //Finally close our .txt
    die(header("Location: ".$_SERVER["HTTP_REFERER"]));
?>