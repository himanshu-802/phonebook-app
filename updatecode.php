<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rentomojo";
$connection =mysqli_connect($servername, $username, $password, $dbname);

if(isset($_POST['updatedata']))
{

    
	$fname=$_POST['fname'];
	$dob=  $_POST['dob'];
	$contact1=$_POST['contact1'];
	$contact2=$_POST['contact2'];
	$email=$_POST['email'];

	
	$query="UPDATE `phonebook` SET `fname`='$fname',`dob`='$dob',`contact1`='$contact1',`contact2`='$contact2',`email`='$email' WHERE contact1='$contact1' ";
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
