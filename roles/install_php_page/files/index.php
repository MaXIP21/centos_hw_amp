<?php
$link = mysql_connect('localhost', 'user', 'password');
if (!$link) {
    die('Could not connect: '.mysql_error());
}
echo 'Alma.com served successfully';
mysql_close($link);
?>