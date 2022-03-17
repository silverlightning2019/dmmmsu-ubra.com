<?php
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
		<title>Dashboard</title>
	</head>
		<body>
			<?php
				if(isset($_POST['show'])){
					$j_id=$_POST["j_id"];
				}
			?>
			<form action="test2.php" method="POST">
				<input type="text" name="j_id">
				<button name="show">next</button>
			</form>
		</body>
</html>
