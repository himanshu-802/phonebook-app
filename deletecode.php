<?php
$connection = mysqli_connect("localhost","root","","phpcrud");

if(isset($_POST['deletedata']))
{

	$fname = $_POST['d_fname'];
    

    echo '<script> alert($fname); </script> ';


	$query = " DELETE FROM student WHERE fname='$fname'; ";
	$query_run= mysqli_query($connection, $query);


	if($query_run){
        	
		echo '<script> alert("Data Deleted"); </script> ';
		header('Location:index.php');
	}
	else{
		echo '<script> alert("Data Not Saved"); </script>';
	}
}
?>