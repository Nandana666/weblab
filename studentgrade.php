<html>
	<head>
		<title>Student Grade</title>
	</head>
	<body>
		<h2>Student Grade</h2>
		<form action="" method="POST">
			Total mark:<input type="number" name="total"><br><br>
			Student mark:<input type="number" name="student_mark"><br><br>
			<input type="submit" name="submit">
		</form>
	</body>
</html>		
<?php
	if(isset($_POST['submit'])){
		$total=$_POST['total'];
		$student_mark=$_POST['student_mark'];
		$percentage=(($student_mark/$total)*100);
		if($percentage>=60){
			$grade="First Division";
		}
		else if($percentage>=45 && $percentage<60){
			$grade="Second Division";
		}
		else if($percentage>=33 && $percentage<45){					
			$grade="Third Division";
		}
		else{
			$grade="Fail";
		}
		echo "Grade=$grade";
	}
?>		
		
