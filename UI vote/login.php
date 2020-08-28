<?php
$server="localhost";
$username="root";
$password="";
$db="mydb";
$conn=mysqli_connect($server,$username,$password,$db);
session_start();
?>
<head>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


<div class="container">
<title>LogIn page</title>
<link rel="stylesheet" href="./css/style.css">
</head>
<body>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<div class="container">
<div>


<div class="jumbotron">

<body>
<form  method="post">
<div class="row">
            <div class="login-container ">
              <div class="section-title">
                <h2>Sign up</h2>
              </div>
              <form class="php-email-form">
                <div>
                
                  <div class="form-group">
                    <input
                      type="text"
                      class="form-control"
                      name="email"
                      id="name"
                      placeholder="Your name"
                      data-rule="name"
                      data-msg="Please enter a valid name"
                    />
                    <div class="validate"></div>
                  </div>
                </div>
                <div class="form-group">
                  <input
                    type="password"
                    class="form-control"
                    name="passwords"
                    id="password"
                    placeholder="password"
                    data-rule="minlen:4"
                    data-msg="Please enter at least 8 chars of text"
                  />
                  <div class="validate"></div>
                </div>

                
                <div class="text-center mt-4">
                 <input type="submit" value="Register/log in" name="submitt" class="btn btn-block">
                
				</div>
				
				<div class="form-group">

<!-- <label class="control-label col-sm-2">Name</label><div class="col-sm-10">
<input type = "text" placeholder="Enter your name"  class="form-control"name="email" required>
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-2">Password</label><div class="col-sm-10">
<input type="password" placeholder="Enter your password" class="form-control" name="passwords" class="form-control">
</div>
</div>
<input type="submit" value="Sign Up/Log In"class="btn  btn-success btn-lg  btn-block" name="submitt" > -->


              </form>
            </div>
          </div>
	
	
	</form>
	<?php
	if(isset($_POST["submitt"]))
	{
$email= $_POST['email'];
$password=$_POST['passwords'];
if(!empty($email)&&!empty($password))
{
	$ins_sql="INSERT INTO loginpage (name,password) VALUES ('$email','$password')";

$run=mysqli_query($conn,$ins_sql);
			$run=mysqli_fetch_assoc($run); 
		header('Location:voteaction.php');
	
}

else{
		echo" You must enter a username and a password";
	}

}
?>
</body>
</div>
</div>
</body>
<footer class="text-center ">&copy; Copyright 2020 Zaye</footer>
</html>