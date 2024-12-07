<html>
	<head></head>
	<body>
		<form action="" method="post">
		Number:<input type="number" name="n" required><br><br>
		<input type="submit" name="submit">
		</form>
	</body>
</html>

<?php
	if(isset($_POST['submit'])){
		$n=$_POST['n'];
		$sum=0;
		for($i=2;$i<$n;$i++){
			$is_prime=true;
		for($j=2;$j<=sqrt($i);$j++){
				if($i%$j==0){
				
					$is_prime=false;
					break;
			
				}
			}
		
			if($is_prime){
				$sum=$sum+$i;
			}
		}
		echo "The sum of prime numbers less than $n is $sum";
	}				
	
?>		
