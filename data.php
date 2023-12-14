<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Nana Test :D php welcome</title>
</head>
<body>	
	<?php echo $_POST["num"]; ?><br>
	歡迎	<?php echo $_POST["name"]; ?>!

	<?php
		$mydbhost = "sql_endpoint";
		$mydbuser = "postgres";
		$mydbpass = 'nanatest2023';
    $db_name = 'postgres';
		$conn = pg_connect($mydbhost, $mydbuser, $mydbpass, $db_name);
		if(! $conn){
			echo "Error : Unable to open database\n";
		}

		$sql="INSERT INTO transactions (name, num)
		VALUES
		('$_POST[name]','$_POST[num]')";
		$retval = pg_query($conn, $sql);
		if(! $retval){
			die("create error" . mysqli_error($conn));
		}
		mysqli_close($conn);
	?>

</body>
</html>
