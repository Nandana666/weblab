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
		if($number<0){
			$result="Negative Number";
		}
		elseif($number>0){
			$result="Positive Number";
		}
		else{
			$result="Zero";
		}
		echo "Number is $result";
	}
	
?>		
					
				
