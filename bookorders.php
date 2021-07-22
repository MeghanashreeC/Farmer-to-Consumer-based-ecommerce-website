# Farmer-to-Consumer-based-ecommerce-website
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Your Orders</title>
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
  <h2>Book your Order</h2>
  <form action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
        <label>Name:</label>
      <input type="text" class="form-control" placeholder="Name" name="user_name">
    </div>
    <div class="form-group">
      <label>Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="user_email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" placeholder="Enter password" name="user_password">
    </div>
			<div class="form-group">
      <label>Item Code:</label>
      <input type="code" class="form-control" placeholder="Enter Item Code" name="item_code">
    </div>
	<div class="form-group">
      <label>Quantity(in kilograms):</label>
      <input type="quantity_in_kilograms" class="form-control" placeholder="Enter Quantity" name="quantity_in_kilograms">
    </div>
	<div class="form-group">
      <label>Delivery address:</label>
     <textarea class="form-control" name="delivery_address"></textarea>
    </div>
	<div class="form-group">
      <label>Pincode:</label>
      <input type="pincode" class="form-control" placeholder="Enter pincode" name="pincode">
    </div>
	<div class="form-group">
      <label>Contact number</label>
      <input type="user_contact_details" class="form-control" placeholder="Contact Number" name="user_contact_details">
    </div>
		
       <input type="submit" name="insert-btn" class="btn btn-primary" />
  </form>
  
  <?php
     $conn = mysqli_connect('localhost','root','meghana123','grow');
	 
	 if(isset($_POST['insert-btn'])){
		 
	 
	 
	  $user_name = $_POST['user_name'];
	  $email = $_POST['user_email'];
	  $user_password = $_POST['user_password'];
	  $item_code = $_POST['item_code'];
	  $quantity_in_kilograms = $_POST['quantity_in_kilograms'];
	  $delivery_address = $_POST['delivery_address'];
	  $pincode = $_POST['pincode'];
	  $user_contact_details = $_POST['user_contact_details'];
	  
	  
	  
	  $insert = "INSERT INTO user(user_name,user_email,user_password,item_code,quantity_in_kilograms,delivery_address,pincode,user_contact_details) VALUES('$user_name',' $email','$user_password','$item_code','$quantity_in_kilograms','$delivery_address','$pincode','$user_contact_details')";
	  
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
