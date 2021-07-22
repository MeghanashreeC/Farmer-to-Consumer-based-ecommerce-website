<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<br><br>
  <h2>Register Here</h2>
  <form action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
        <label>Name:</label>
      <input type="text" class="form-control" placeholder="Name" name="name">
    </div>
    <div class="form-group">
      <label>Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    <div class="form-group">
      <label>Contact number</label>
      <input type="contact" class="form-control" placeholder="Contact Number" name="contact">
    </div>
		
       <input type="submit" name="insert-btn" class="btn btn-primary" />
  </form>
  
  <?php
     $conn = mysqli_connect('localhost','root','meghana123','grow');
	 
	 if(isset($_POST['insert-btn'])){
		 
	 
	 
	  $name = $_POST['name'];
	  $email = $_POST['email'];
	  $contact = $_POST['contact'];
	  
	  
	  
	  $insert = "INSERT INTO registration(name,email,contact) VALUES('$name','$email','$contact')";
	  
	  $run_insert = mysqli_query($conn,$insert);
	  if($run_insert === true){
		  echo "Data has been inserted";
		  
	  }else{
		  echo "Failed,try again";
	  }
	 
	 }
	 
  
  ?>
  
  
  
  
</div>

</body>
</html>
