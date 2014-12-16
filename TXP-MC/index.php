<!DOCTYPE html>
<html>

<head>

<?php
require_once('MinecraftServerStatus.class.php');
$Server = new
MinecraftServerStatus('Your.servers.IP.address.when.port.number.equals.25565');
?>

<title>TXP-MC Server Admin - Home</title>
<font size="2" face="arial, helvetica" color="silver">


<center>

<h1>Server CPanel - Home</h1>

</head>
<body>
<h3>
To complete setup, please make sure to edit this file, so that in: 

<br/>

$Server = new MinecraftServerStatus('Your.servers.IP.address.when.port.number.equals.25565'); 

<br/>

your server's current (static, if possible) IP address has replaced "Your.servers.IP.address.when.port.number.equals.25565".

Also, make sure that your server jar has been renamed to: "minecraft_server" (dot 'jar' if using jre), and that all server components have been placed in the "/server/" directory. Enjoy!

<br/><br/>

Server Status Info:
<br/><br/>

<b>Online/Offline:</b> <?php $Server->Get('online'); ?>
<br/>

<b>Player Count:</b> <?php echo $Server->Get('numplayers').' / '.$Server->Get('maxplayers'); ?>
<br/>

<b>Hostname:</b> <?php $Server->Get('hostname'); ?>
<br/>

<b>Gametype:</b> <?php $Server->Get('gametype'); ?>
<br/>

<b>Game ID:</b> <?php $Server->Get('game_id'); ?>
<br/>

<b>Version:</b> <?php $Server->Get('version'); ?>
<br/>

<b>Plugins:</b> <?php $Server->Get('plugins'); ?>
<br/>

<b>Map:</b> <?php $Server->Get('map'); ?>
<br/>

<b>Host Port:</b> <?php $Server->Get('hostport'); ?>
<br/>

<b>Host IP:</b> <?php $Server->Get('hostip'); ?>
<br/>

<b>Software:</b> <?php $Server->Get('software'); ?>
<br/>
<br/>

<a href="toggle.php?method=launch">Activate Server</a>
<br/>
<a href="toggle.php?method=stop">Deactivate Server</a>
<br/>
<a href="toggle.php?method=reboot">Restart Server</a>

<br/>
<br/>
<center><i>Need more options? <br/> try the following toggle methods... <br/> <u>halt <br/> restart <br/> debug</u></i></center>
<br/>
<br/>

<i>Sources:</i>
<br/>
<b>
http://stackoverflow.com/questions/13350268/start-and-stop-minecraft-java-process-via-php
<br/>
https://github.com/NoxNebula/Minecraft-Server-Status
<br/>
http://www.phpclasses.org/package/204-PHP-This-class-allows-one-to-read-and-modify-files-using-the-INI-file-format-.html#download
<br/>
http://www.minecraftforum.net/topic/1806131-suggestion-a-much-improved-server-properties-file-format/
<br/>
http://stackoverflow.com/questions/8889025/unzip-a-file-with-php
<br/>
</b>

</h3>
</body>

</center>

</html>