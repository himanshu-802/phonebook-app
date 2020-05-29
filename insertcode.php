<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rentomojo";
$connection =mysqli_connect($servername, $username, $password, $dbname);

if(isset($_POST['insertdata']))
{

	$fname=$_POST['fname'];
	$dob=$_POST['dob'];
	$contact1=$_POST['contact1'];
	$contact2=$_POST['contact2'];
	$email=$_POST['email'];

	echo $fname;
	

	$query="INSERT INTO `phonebook`(`fname`, `dob`, `contact1`, `contact2`, `email`) VALUES ('$fname','$dob','$contact1','$contact2','$email')";
	$query_run=mysqli_query($connection,$query);

	if($query_run){
		
		echo '<script> alert("Data Saved"); </script>';
		header('Location:index.php');
	}
	else{
		echo '<script> alert("Data Not Saved"); </script>';
	}

}
else{
	echo "not connected";
}

?>
