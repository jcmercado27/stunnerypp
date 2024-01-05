<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"stunnerypp");
	$edit = $_GET['edit'];
	$sql = "select * from songs where id ='$edit'";
	$run = mysqli_query($connection,$sql);

	while($row=mysqli_fetch_array($run))
		$uid = $row['id'];
		$title = $row['title'];
		$artist = $row['artist'];
		$lyrics = $row['lyrics'];
	

?>

<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"stunnerypp");

	if(isset($_POST['submit']))
	{
	$edit = $_GET['edit'];
		$title = $_POST['title'];
		$artist = $_POST['artist'];
		$lyrics = $_POST['lyrics'];
		$sql = "update songs set title= '$title', artist= '$artist', lyrics= '$lyrics' where id= '$edit'";

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
    			<h5 class="card-title">Special title treatment</h5>
    			<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
<form>
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" placeholder="Enter Title" value="<?php echo $title ?>">
  </div>
  <div class="form-group">
    <label>Artist</label>
    <input type="text" class="form-control" placeholder="Enter Artist" value="<?php echo $artist ?>">
  </div>
  <div class="form-group">
    <label>Lyrics</label>
    <input type="text" class="form-control" placeholder="Enter Lyrics" value="<?php echo $lyrics ?>">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>