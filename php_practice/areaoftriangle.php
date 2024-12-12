<html>
	<head></head>
	<body>
		<form action="" method="post">
		Breadth:<input type="number" name="b" required><br><br>
		Height:<input type="number" name="h" required><br><br>
		<input type="submit" name="submit">
		</form>
	</body>
</html>

<?php
	if(isset($_POST['submit'])){
		$b=$_POST['b'];
		$h=$_POST['h'];
		$area=0.5*$b*$h;
		echo "Area = $area";
	}
?>		
