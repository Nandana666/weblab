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


if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$admn_no=$_POST['admn_no'];
	$branch=$_POST['branch'];

	echo "<tr>
	<td>$name</td></tr>
	<td>$email</td></tr>
	<td>$admn_no</td></tr>
	<td>$branch</td></tr>
	</tr>";
}						
?>	
