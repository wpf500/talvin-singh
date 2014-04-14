<?php
    $email = $_POST['email'];
    if (strpos($email, '@') !== false) {
        $f = fopen("emails.txt", "a");
        fwrite($f, $email);
        fwrite($f, "\n");
        fclose($f);
    } else {
        header("HTTP/1.1 400 Bad Request");
    }
?>
