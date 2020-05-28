<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpcrud";
$connection =mysqli_connect($servername, $username, $password, $dbname);

if(isset($_POST['insertdata']))
{
	// $name= $_POST['name'];
 //    $dob= $_POST['dob'];
 //    $contact1= $_POST['contact1'];
 //    $contact2= $_POST['contact2'];
	// $email1= $_POST['email1'];
	// $email2= $_POST['email2'];

	// $query="INSERT INTO `phonebook`(`name`, `dob`, `contact1`, `contact2`, `email1`, `email2`) VALUES ('$name','dob','contact1','contact2','email1','email2')";


	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$course=$_POST['course'];
	$query="INSERT INTO `student`(`fname`, `lname`, `course`) VALUES ('$fname','$lname','$course')";
	$query_run=mysqli_query($connection,$query);
	// $query_run=mysqli_query($connection,$query);

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