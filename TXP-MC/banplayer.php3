<!DOCTYPE html>
<html>

<head>

<?php
$srvbanplayer = file_get_contents('./server/banned-players.txt')
?>

<title>TXP-MC Admin - Server Player Ban List</title>
<font size="2" face="arial, helvetica" color="silver">


<center>

<h1>Server Player Ban List Editor</h1>

</head>
<body>

<h3>To edit the server banned-players.txt, fill out the form according to the corresponding labels. To take people off the list, you will have to manually remove the banned player's line from the file. Click submit when you're ready...</h3>

<form action="banplayer.php" method="post" name="edit" id="edit">
Bannee: <input type="text" name="victim"><br>
Date: <input type="text" name="date"><br>
Banner: <input type="text" name="accuser"><br>
Ban Time Limit: <input type="text" name="limit"><br>
Ban Reason: <input type="text" name="reason"><br>
Who's already been Banned: <br/>
<?php echo htmlspecialchars($srvbanplayer); ?>
<br/>
<input type="submit">
</form>

</body>
<footer>

</center>

</html>