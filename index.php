<!DOCTYPE html>
<html>
<head>
	<title>Phone Book Web app</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet"  href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
	
</head>
<body>

	<!-- Button trigger modal -->


	<!-- Modal -->
	<div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Add Student Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="insertcode.php" method="POST">
				<div class="modal-body">
				
						<div class="form-group">
							<label >Name</label>
							<input type="text" name="fname" class="form-control" placeholder="Enter Name" required=""> 
						</div>

                        <div class="form-group ">
                             <label >Date</label>
                             <input class="form-control" name ="dob" type="date" value="2011-08-19" >               
                        </div>

					    <div class="form-group">
							<label >Contact Number 1</label>
							<input type="text" name="contact1" class="form-control" placeholder="Enter Contact 1" required=""> 
						</div>

						<div class="form-group">
							<label >Contact Number 2</label>
							<input type="text" name="contact2" class="form-control" placeholder="Enter Contact 2">
						</div>
						<div class="form-group">
							<label >Email</label>
							<input type="email" name="email" class="form-control" placeholder="Enter Email-Id">
						</div>
						

		
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" name="insertdata" class="btn btn-primary">Save Contact</button>
				</div>
			</form>

			</div>
		</div>
	</div>


<!-- ###################################################################### -->




	<!-- EDIT FORM (Bootstarp MODAL) -->
	<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Edit Contact Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="updatecode.php" method="POST">
				<div class="modal-body">


	

						<div class="form-group">
							<label >Name</label>
							<input type="text" name="fname" id="fname" class="form-control" placeholder="Enter Name" required=""> 
						</div>
                        <div class="form-group ">
                             <label >Date</label>
                             <input class="form-control" name="dob" type="date" id="dob" value="2011-08-19" >
                        
                        </div>

					    <div class="form-group">
							<label >Contact Number 1</label>
							<input type="text" name="contact1" class="form-control" id="contact1" placeholder="Enter Contact 1" required=""> 
						</div>

						<div class="form-group">
							<label >Contact Number 2</label>
							<input type="text" name="contact2" class="form-control" id="contact2" placeholder="Enter Contact 2">
						</div>
						<div class="form-group">
							<label >Email</label>
							<input type="email" name="email" class="form-control" id="email" placeholder="Enter Email-Id">
						</div>
		
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
				</div>
			</form>

			</div>
		</div>
	</div>






<!-- ####################################################################### -->

	<!-- DELETE FORM (Bootstarp MODAL) -->
	<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Delete Student Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				
				<form action="deletecode.php" method="POST">
				
				<div class="modal-body">

				<input type="hidden" name="d_fname" id="d_fname"> 
                        
				
						<h4>Do you want to Delete this Data?</h4>
		
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
					<button type="submit" name="deletedata" class="btn btn-primary">Yes !! Delete It.</button>
				</div>
			</form>

			</div>
		</div>
	</div>












<!-- ############################################################################# -->
	<div class="container">
		<div class="jumbotron">
			<div class="card">
				<h1 >Phone Book Web app</h1>
			</div>
			<div class="card">
				<div class="card-body">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentaddmodal">
						ADD CONTACT
					</button>
				</div>
			</div>

			<div class="card">
				<div class="card-body">

				                         		
                     
                    <?php

                         $connection = mysqli_connect("localhost","root","","rentomojo");
                         $query ="SELECT * FROM phonebook ORDER BY fname";
                         $query_run= mysqli_query($connection,$query);
                     ?>
					<table id ="datatableid" class="table table-bordered table-dark">
						<thead>
							<tr> 
								<th scope="col">Name</th>
								<th scope="col">D.O.B</th>
								<th scope="col">Contact 1</th>
								<th scope="col">Contact 2</th>
								<th scope="col">E-Mail</th>
								<th scope="col">Edit</th>
								<th scope="col">Delete</th>
							</tr>
						</thead>
						 <?php
                         if($query_run)
                         {
                         	foreach ($query_run as $body) {
                         ?>
                    
						<tbody>
							<tr>
								
								<td><?php echo $body['fname']; ?></td>
								<td><?php echo $body['dob']; ?></td>
								<td><?php echo $body['contact1']; ?></td>
								<td><?php echo $body['contact2']; ?></td>
								<td><?php echo $body['email']; ?></td>
								<td>
									<button class="btn btn-success editBtn">EDIT</button>
								</td>
								<td>
									<button class="btn btn-danger deleteBtn">DELETE</button>
								</td>
							</tr>

						</tbody>
						<?php
                         	}
                         }
                         else{
                         	echo "No record found";
                         }

					     ?>
                    </table>
					
				</div>
			</div>
		</div>
	</div>

    <script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

    

    <script >
    	
    	$(document).ready(function() {
               $('#datatableid').DataTable();
        } );

    </script>


    <script >
    	$(document).ready(function(){
    		$('.deleteBtn').on('click',function(){
    			$('#deleteModal').modal('show');
                 

    			$tr = $(this).closest('tr');

    			var data= $tr.children("td").map(function(){
    				return $(this).text();
    			}).get();

    			console.log(data);

    			$('#d_fname').val(data[0]);


    		});
    	});
 
    </script>

    <script > 
    
    	$(document).ready(function(){
    		$('.editBtn').on('click',function(){
    			$('#editModal').modal('show');


    			$tr = $(this).closest('tr');
    			var data= $tr.children("td").map(function(){
    				return $(this).text();
    			}).get();

    			console.log(data);

    			

    			$('#fname').val(data[0]);
    			$('#dob').val(data[1]);
    			$('#contact1').val(data[2]); 
    			$('#contact2').val(data[3]);
    			$('#email').val(data[4]);
    		});
    	});

 
    </script>



	</body>
	</html>
