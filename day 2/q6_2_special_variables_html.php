<html>

	<form action='q6_2_special_variables_html.php' method='POST'>
		<h4>Enter data</h4>
		Name of student: <input type='text' name='student'><br>
		Marks in Each Subject
		Subject 1* : <input type='number' name='sub1'><br>
		Subject 2* : <input type='number' name='sub2'><br>
		Subject 3* : <input type='number' name='sub3'><br>
		Subject 4* : <input type='number' name='sub4'><br>
		Subject 5* : <input type='number' name='sub5'><br>
		<input type='submit' value='submit'><br>
	</form>
	</html>

<?php

$name=$_POST['student'];
$s1=$_POST['sub1'];
$s2=$_POST['sub2'];
$s3=$_POST['sub3'];
$s4=$_POST['sub4'];
$s5=$_POST['sub5'];

$tob=$s1+$s2+$s3+$s4+$s5;
$tom=500;
$perc=($tob/$tom)*100;

if($s1||$s2||$s3||$s4||$s5||$name)
{
	echo"Name of the student:".$name."<br>";
	echo"Marks in each subject:<br>";
	echo"subject 1:".$s1."<br>";
	echo"subject 2:".$s2."<br>";
	echo"subject 3:".$s3."<br>";
	echo"subject 4:".$s4."<br>";
	echo"subject 5:".$s5."<br>";
	echo"Total marks obtained:".$tob."<br>";
	echo"Total marks:".$tom."<br>";
	echo"percentage:".$perc."<br>";
}
?>
	
