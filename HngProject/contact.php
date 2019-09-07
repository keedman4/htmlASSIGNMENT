<?php
    $title = $_POST["firstname"]; //You have to get the form data
    $gain = $_POST["lastname"];
    $offset = $_POST["email"];
    $offset = $_POST["title"];
    $offset = $_POST["message"];
    $file = fopen('contact.txt', 'w+'); //Open your .txt file
    ftruncate($file, 0); //Clear the file to 0bit
    $content = $title. PHP_EOL .$gain. PHP_EOL .$offset;
    fwrite($file , $content); //Now lets write it in there
    fclose($file ); //Finally close our .txt
    die(header("Location: ".$_SERVER["HTTP_REFERER"]));
?>