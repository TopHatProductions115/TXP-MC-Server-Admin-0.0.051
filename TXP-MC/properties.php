<?php

$editproperties = htmlspecialchars($_POST['properties']);
$lastproperties = "/TXP-MC/settings/server.ini";
$realproperties = "/TXP-MC/server/server.properties"
$opnproperties = fopen($lastproperties, 'w') or die("ERR: FILE_UNAVAILABLE_FOR_FOPEN_REQUEST");
$changeproperties = fopen($realproperties, 'w') or die("ERR: .PROPERTIES_FILE_UNAVAILABLE_FOR_FOPEN_REQUEST");

fwrite($opnproperties, $editproperties);
fwrite($changeproperties, $editproperties);
fclose($opnproperties);
fclose($changeproperties);
echo "Server Properties saved.";

?>