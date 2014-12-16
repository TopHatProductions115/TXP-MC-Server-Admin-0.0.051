<!DOCTYPE html>
<html>

<head>

<?php
$srvop = file_get_contents('./server/ops.txt')
?>

<title>TXP-MC Admin - Server OPs</title>
<font size="2" face="arial, helvetica" color="silver">


<center>

<h1>Server OPs Editor</h1>

</head>
<body>

<h3>To edit the server ops.txt, simply place each new op on a new line. Click submit when you're ready...</h3>

<form action="op.php" method="post" name="edit" id="edit">
<textarea id="datop" rows="56" cols="150">
<?php echo htmlspecialchars($srvop); ?>
</textarea>
<br/>
<input type="submit">
</form>

</body>

</center>

</html>