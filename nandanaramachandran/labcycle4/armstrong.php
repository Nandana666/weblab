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
		$temp=$n;
		$d=strlen((string)$temp);
		while($temp>0){
			
			$digit=$temp%10;
			$sum+=pow($digit,$d);
			$temp=(int)($temp/10);
		}
		if($sum==$n){
			echo "$n is an armstrong number";
		}
		else{
			echo " $n is not an armstrong number";
		}
					
		
		
	}
?>		
