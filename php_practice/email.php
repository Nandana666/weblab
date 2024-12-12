<html>
	<head></head>
	<body>
		<form action="" method="post">
		Email:<input type="email" name="email" required><br><br>
		<input type="submit" name="submit">
		</form>
	</body>
</html>

<?php
	if(isset($_POST['submit'])){
		$email=$_POST['email'];
		$name=" ";
		for($i=0;$i<strlen($email);$i++){
			if($email[$i]=='@'){
				break;
			}
			$name=$email[$i];	
		}
		echo "Username extracted from the email id is : $name";
	}				
	
?>		
