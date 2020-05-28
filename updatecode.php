<?php
$connection = mysqli_connect("localhost","root","","phpcrud");

if(isset($_POST['updatedata']))
{

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$course = $_POST['course'];

	$query = "UPDATE student SET fname='$fname' ,lname ='$lname' , course = '$course' WHERE fname='$fname'  ";
	$query_run= mysqli_query($connection, $query);


	if($query_run){
        	
		echo '<script> alert("Data Updated"); </script> ';
		header('Location:index.php');
	}
	else{
		echo '<script> alert("Data Not Saved"); </script>';
	}
}
?>