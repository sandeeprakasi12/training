<?php

$mysqli = new mysqli('127.0.0.1', 'root', '');

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}
echo 'Connection OK';
$mysqli->close();

var_dump(mail("ban.nishat@gmail.com", "subject", "message"));
if($mailSuccess == true) {
    echo "Mail sent Successfully";
} else {
    echo "Problem sending mail.";
}