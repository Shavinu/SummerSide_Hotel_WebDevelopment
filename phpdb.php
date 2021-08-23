<!DOCTYPE html>
<html>
<head>
	<title>Untitled documents</title>
</head>
<body>
<?php

$dbconnect=mysql_connect("databases","","emailus">;
if(mysqli_connect_errno($dbconnect)){
	echo "Some thing went wrong";
}
else{
	echo "Your response has been recorded";
}
?>
</body>
</html>