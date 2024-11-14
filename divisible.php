<html>
	<head></head>
	<body>
		<form action="" method="post">
		Number:<input type="number" name="n" required><br><br>
		Divisor:<input type="number" name="d" required><br><br>
		<input type="submit" name="submit">
		</form>
	</body>
</html>

<?php
	if(isset($_POST['submit'])){
		$n=$_POST['n'];
		$d=$_POST['d'];
		if($d==0){
			echo "Division by zero is not possible";
		}
		else{
			if($n % $d == 0){
				echo "$n is divisible by $d";
			}
			else{
				echo "Not divisible";		
			}
		}		
		
	}
?>		
