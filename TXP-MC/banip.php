<?php

$file = './TXP-MC/server/banned-ips.txt';
$current = file_get_contents($file);

$editbanip_victim = htmlspecialchars($_POST['victim']);
$editbanip_date = htmlspecialchars($_POST['date']);
$editbanip_accuser = htmlspecialchars($_POST['accuser']);
$editbanip_limit = htmlspecialchars($_POST['limit']);
$editbanip_reason = htmlspecialchars($_POST['reason']);

$current . = "\n" $editbanip_victim . '|' . $editbanip_date . '|' . $editbanip_accuser . '|' . $editbanip_limit . '|' . $editbanip_reason '\r\n';

$current . = "\n" $editbanip_victim , '|', $editbanip_date, '|', $editbanip_accuser, '|', $editbanip_limit, '|', $editbanip_reason, PHP_EOL;

file_put_contents($file, $current);

fclose($file);
echo "Banned IPs saved.";

?>