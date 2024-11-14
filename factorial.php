<html>
	<head></head>
	<body>
		<form action="" method="post">
		Number:<input type="number" name="number" required><br><br>
		<input type="submit" name="submit">
		</form>
	</body>
</html>

<?php
	if(isset($_POST['submit'])){
		$number=$_POST['number'];
		$factorial=1;
		for($i=1;$i<=$number;$i++){
			$factorial=$factorial*$i;
		}
		echo "Factorial=$factorial";
	}
?>					
