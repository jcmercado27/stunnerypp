<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"stunnerypp");

	if(isset($_POST['submit']))
	{
		$title = $_POST['title'];
		$artist = $_POST['artist'];
		$lyrics = $_POST['lyrics'];

		$sql = "insert into songs(title,artist,lyrics)values('$title','$artist','$lyrics')";

		if(mysqli_query($connection,$sql))
		{
			echo '<script>location.replace("index.php")<script>';
		}
		else 
		{
		echo "error" . $connection->error;
		}
	}

?>


<!DOCTYPE html>
<html lang="eng">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>StunnerYPP CRUD</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-9">
			<div class="card">
 			<div class="card-header">
    			<h1>StunnerYPP CRUD</h1>
  			</div>
  			<div class="card-body">
    			<h5 class="card-title">Add entries here</h5>
    			<p class="card-text">supporting text</p>
<form action="add.php" method="post">
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" placeholder="Enter Title">
  </div>
  <div class="form-group">
    <label>Artist</label>
    <input type="text" class="form-control" name="artist" placeholder="Enter Artist">
  </div>
  <div class="form-group">
    <label>Lyrics</label>
    <input type="text" class="form-control" name="lyrics" placeholder="Enter Lyrics">
  </div>
  <button type="submit" class="btn btn-primary" name="submit" value="Register">submit</button>
</form>
</body>
</html>