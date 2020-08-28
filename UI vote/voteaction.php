<?php
$server="localhost";
$username="root";
$password="";
$db="mydb";
$conn=mysqli_connect($server,$username,$password,$db);
?>
<!DOCTYPE html>
<html>
<head>
	

	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="./css/style.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<div class="container">
<title>
Vote now
</title>
</head>
<body>
	<div class="jumbotron">
	<form method="post"  enctype ="multipart/form-data"class="form-horizontal">
<div class="form-group">	
<div class="section-title">
                <h2>Favorite character</h2>
              </div>
	<div class="col-sm-10">
	<div class="vote-grid">
		<div class="vote-item">
			<div class="vote-item-image-container">
				<img src="img/saitama.jpg" alt="saitama" class="vote-item-image">
			</div>
			<div class="vote-item-text">
				<h3>Saitama<input type="radio" name="anime" value="Saitama"/></h3>
				
			</div>
		</div>
		<div class="vote-item">
			<div class="vote-item-image-container">
				<img src="img/naruto.jpg" alt="Naruto" class="vote-item-image">
			</div>
			<div class="vote-item-text">
				<h3>Naruto<input type="radio" name="anime" value="Naruto"/></h3>
				
			</div>
		</div>
		<div class="vote-item">
			<div class="vote-item-image-container">
				<img src="img/deku.jpg" alt="Deku" class="vote-item-image">
			</div>
			<div class="vote-item-text">
				<h3>Deku<input type="radio" name="anime" value="Deku"/></h3>
				
			</div>
		</div>
		<div class="vote-item">
			<div class="vote-item-image-container">
				<img src="img/levi.jpg" alt="Levi" cLass="vote-item-image">
			</div>
			<div class="vote-item-text">
				<h3>Levi<input type="radio" name="anime" value="Levi"/></h3>
				
			</div>
		</div>
		<div class="vote-item">
			<div class="vote-item-image-container">
				<img src="img/light.jpg" alt="Light Yagami" cLass="vote-item-image">
			</div>
			<div class="vote-item-text">
				<h3>Light Yagami<input type="radio" name="anime" value="Light Yagami"/></h3>
				
			</div>
		</div>
	</div>
	<!-- <table>
	<tr><td><input type="radio" name="anime" value="saitama">Saitama<tr><td> <img src="img/saitama.jpg" ><br></td></tr>
	<tr><td><input type="radio" name="anime" value="naruto">Naruto<tr><td> <img src="img/naruto.jpg" ><br></td></tr>
	<tr><td> <input type="radio" name="anime" value="deku">Deku<tr><td> <img src="img/deku.jpg" ><br></td></tr>
	<tr><td> <input type="radio" name="anime" value="levi">Levi<tr><td> <img src="img/levi.jpg" ><br></td></tr>
	<tr><td> <input type="radio" name="anime" value="light">Light Yagami<tr><td> <img src="img/light.jpg" ><br></td></tr>
</table> -->
</div>
</div>
<div class="text-center mt-4">
                 <input type="submit" value="submit now" name="submitted" class="btn btn-block">
                
                </div>
<!-- <input type="submit" name ="submitted"class="btn  btn-primary btn-lg  btn-block" Placeholder='Submit Now'> -->
</form>
</div>
<body>
	<a href="http://localhost/UI vote/vote.php">View Results</a>
</div>

</html>
<?php
if(isset($_POST['submitted'])){
	$Anime=$_POST['anime'];
		$query ="SELECT id FROM anime WHERE hero='$Anime'";
	$run=mysqli_query($conn,$query);
	$run=mysqli_fetch_assoc($run);

$query1= "UPDATE  anime set number=number+1 where id='$run[id]'";
$run=mysqli_query($conn,$query1);
}





?>