<?php

$editop = htmlspecialchars($_POST['datop']);
$lastop = "/TXP-MC/server/ops.txt";
$opnop = fopen($lastop, 'w') or die("ERR: FILE_UNAVAILABLE_FOR_FOPEN_REQUEST");

fwrite($opnop, $editop);
fclose($opnop);
echo "Server OP settings saved.";

?>