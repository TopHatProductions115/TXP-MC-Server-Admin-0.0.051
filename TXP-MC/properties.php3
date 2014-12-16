<!DOCTYPE html>
<html>

<head>

<?php
$srvrprpt = file_get_contents('./server/server.properties')
?>

<title>TXP-MC Server Properties Editor</title>
<font size="2" face="arial, helvetica" color="silver">


<center>

<h1>Server Properties Editor</h1>

</head>
<body>

<h3>This section of the control panel allows for you to edit your server's .properties file; it's highly suggested that you only edit this page when your server is <b>OFF</b>. If your server crashes as a result of you doing otherwise, the TXP-Network is NOT responsible for any resulting damage. Click submit when you're ready...</h3>
<br/>
<br/>

<form action="properties.php" method="post" name="edit" id="edit">
<textarea id="properties" rows="56" cols="150">
<?php echo htmlspecialchars($srvrprpt); ?>
</textarea>
<br/>
<input type="submit">
</form>

</body>

</center>

</html>