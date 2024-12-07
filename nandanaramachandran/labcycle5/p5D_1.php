<html>
	<head>
		<title>PHP5.1</title>
	<body>
		<form action="" method="POST">
			Name:<input type="text" name="name"><br><br>
			Email:<input type="text" name="email"><br><br>
			Admission number:<input type="text" name="admn_no"><br><br>
			Branch:<input type="text" name="branch"><br><br>
			<input type="submit" name="submit" value="submit">
		</form>
	</body>
</html>			
	
<?php
$con=new mysqli("localhost","root","","php5");
if(!$con){
	echo"not ok";
	}
else
{
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$admn_no=$_POST['admn_no'];
	$branch=$_POST['branch'];
$s="INSERT INTO `table1`(`name`, `email`, `admn_no`, `branch`) VALUES ('$name','$email','$admn_no','$branch')";
$ins=$con->query($s);
$s = "SELECT * FROM table1 where email='$email'";
	$sel=$con->query($s);		
	
	if($sel->num_rows){
	
		while($display=mysqli_fetch_array($sel)){
			$name=$display['name'];
			$email=$display['email'];
			$admn_no=$display['admn_no'];
			$branch=$display['branch'];
			
			echo "<table><tr>
				<td>$name</td></tr>
				<tr><td>$email</td></tr>
				<tr><td>$admn_no</td></tr>
				<tr><td>$branch</td>
			</tr></table>";
		}
	}
	
}
}				
?>	
