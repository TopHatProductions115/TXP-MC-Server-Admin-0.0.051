<!DOCTYPE html>
<html>

<head>

<?php
$srvwhtlst = file_get_contents('./server/white-list.txt')
?>

<title>TXP-MC Admin - Server White List</title>
<font size="2" face="arial, helvetica" color="silver">


<center>

<h1>Server White List Editor</h1>

</head>
<body>

<h3>To edit the server white-list.txt, simply place each new (blocked) player on a new line. Click submit when you're ready...</h3>

<form action="whitelist.php" method="post" name="edit" id="edit">
<textarea id="datwhtlst" rows="56" cols="150">
<?php echo htmlspecialchars($srvwhtlst); ?>
</textarea>
<br/>
<input type="submit">
</form>

</body>

</center>

</html>