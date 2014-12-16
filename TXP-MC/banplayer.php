<?php

$file = './TXP-MC/server/banned-players.txt';
$current = file_get_contents($file);

$editbanplayer_victim = htmlspecialchars($_POST['victim']);
$editbanplayer_date = htmlspecialchars($_POST['date']);
$editbanplayer_accuser = htmlspecialchars($_POST['accuser']);
$editbanplayer_limit = htmlspecialchars($_POST['limit']);
$editbanplayer_reason = htmlspecialchars($_POST['reason']);

$current . = "\n" $editbanplayer_victim . '|' . $editbanplayer_date . '|' . $editbanplayer_accuser . '|' . $editbanplayer_limit . '|' . $editbanplayer_reason '\r\n';

$current . = "\n" $editbanplayer_victim , '|', $editbanplayer_date, '|', $editbanplayer_accuser, '|', $editbanplayer_limit, '|', $editbanplayer_reason, PHP_EOL;

file_put_contents($file, $current);

fclose($file);
echo "Banned Players saved.";

?>