<?php

$editwhtlst = htmlspecialchars($_POST['datwhtlst']);
$lastwhtlst = "/TXP-MC/server/white-list.txt";
$opnwhtlst = fopen($lastwhtlst, 'w') or die("ERR: FILE_UNAVAILABLE_FOR_FOPEN_REQUEST");

fwrite($opnwhtlst, $editwhtlst);
fclose($opnwhtlst);
echo "Server White List saved.";

?>