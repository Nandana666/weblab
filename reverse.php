<html>
	<head></head>
	<body>
		<form action="" method="post">
		Numbers(comma seperated):<input type="text" name="nos" required><br><br>
		<input type="submit" name="submit">
		</form>
	</body>
</html>

<?php
	if(isset($_POST['submit'])){
		$nos=$_POST['nos'];
		$n=array_map('trim',explode(',',$nos));
		$n=array_map('intval',$n);
		rsort($n);
		$arrlength=count($n);
		for($x=0;$x<$arrlength;$x++)
  		{
 			 echo $n[$x];
 			 echo "<br>";
		//echo "Reverse Order:$rev";
		//print_r("Reverse Order:$rev");
		}
	}				
	
?>		
