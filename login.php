<!DOCTYPE html>
<style>
body {
  background-image: url('bak.jpg');
  background-repeat: no-repeat;
}

</style>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="container">
	    <div class="row">
	       <div class="col-lg-6">
		   
		      <h2> Login Form </h2>
		      <form action="validation.php" method="post">
		          <div class="form-group">
			         <label> username </labe>
			         <input type="text" name="user" class="form-control"><br></br>
			      </div>


				  <div class="form-group">
			         <label> password </label>
			         <input type="password" name="password" class="form-control"><br></br>
			      </div>

				  <button type="submit" class="btn btn-primary"> Login </button>
		       </form>
		    </div>
			<div class="col-lg-6">
		      <h2> Sign up Form </h2>
		      <form action="registration.php" method="post">
		          <div class="form-group">
			         <label> username </label>
			         <input type="text" name="user" class="form-control"><br></br>
			      </div>


				  <div class="form-group">
			         <label> password </label>
			         <input type="password" name="password" class="form-control"><br></br>
			      </div>

				  <button type="submit" class="btn btn-primary"> Sign up </button>
		       </form>
		    </div>
	    </div>
	</div>
		
			   
</body>
</html>
