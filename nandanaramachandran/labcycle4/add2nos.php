<html>
	<head></head>
	<body>
		<form action="" method="post">
		Number1:<input type="number" name="n1" required><br><br>
		Number2:<input type="number" name="n2" required><br><br>
		<input type="submit" name="submit">
		</form>
	</body>
</html>

<?php
	if(isset($_POST['submit'])){
		$n1=$_POST['n1'];
		$n2=$_POST['n2'];
		$sum=$n1+$n2;
		echo "Sum of $n1 and $n2 = $sum";
	}
?>		
