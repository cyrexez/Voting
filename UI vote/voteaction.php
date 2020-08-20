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
	<style>
		img{
			width:200px;
			height:200px;
			justify-content: right;
		}
	</style>

	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<div class="container">
<title>
Vote Now
</title>
</head>
<body>
	<div class="jumbotron">
	<form method="post"  enctype ="multipart/form-data"class="form-horizontal">
<div class="form-group">	
	<label class="control-label col-sm-2">Favorite Character</label><div class="col-sm-10">
	<br>
	<table>
	<tr><td><input type="radio" name="anime" value="saitama">Saitama<tr><td> <img src="img/saitama.jpg" ><br></td></tr>
	<tr><td><input type="radio" name="anime" value="naruto">Naruto<tr><td> <img src="img/naruto.jpg" ><br></td></tr>
	<tr><td> <input type="radio" name="anime" value="deku">Deku<tr><td> <img src="img/deku.jpg" ><br></td></tr>
	<tr><td> <input type="radio" name="anime" value="levi">Levi<tr><td> <img src="img/levi.jpg" ><br></td></tr>
	<tr><td> <input type="radio" name="anime" value="light">Light Yagami<tr><td> <img src="img/light.jpg" ><br></td></tr>
</table>
</div>
</div>

<input type="submit" name ="submitted"class="btn  btn-primary btn-lg  btn-block" Placeholder='Submit Now'>
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