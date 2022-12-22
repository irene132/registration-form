<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="font/css/all.min.css">

	
	<style>
	body{
		background-image: url('image/photo.jpg');
		}
		a{
			text-decoration: none;
		}
	</style>
	
</head>
<body class="bg-light" >
	<div class="container">
	 	<div class="row mt-5 ">
	 		<div class="col-lg-4 bg-white m-auto">
	 				<h3 class="text-center pt-3">Login form</h3>

				<form>
				  	<div class="input-group mb-4">
					   <span class="input-group-text"><i class="fa fa-user"></i></span>
					   <input type="text" class="form-control" name="Username" placeholder="Enter Username"  required>
						</div>
						<div class="input-group mb-4">
							<span class="input-group-text"><i class="fa fa-lock"></i></span>
							<input required type="password" class="form-control"  name="password" placeholder="Enter password">
						</div>
				
							<div class="col-md-12 text-center">
								<button type="submit" class="btn btn-success btn-md" name="submit">Login</button>
				
								<h6>Don't have Account? <a href="">Register here</a></h6>
					</div>
			
				</form>
			</div>
		</div>
	</div>

</body>
</html>