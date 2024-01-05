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
    			<button class="btn btn-success"><a href="add.php" class="text-light">add</a></button>
			<button class="btn btn-success"><a href="deleteall.php" class="text-light">deleteall</a></button></td>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Artist</th>
      <th scope="col">Lyrics</th>
    </tr>
  </thead>
  <tbody>
	<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"stunnerypp");
    
	$sql = "select * from songs";
	$run = mysqli_query($connection, $sql);
	$id= 1;
	while($row = mysqli_fetch_array($run))
	{
		$uid = $row['id'];
		$title = $row['title'];
		$artist = $row['artist'];
		$lyrics = $row['lyrics'];
	
	?>
	<tr>
		<td><?php echo $id++ ?></td>
		<td><?php echo $title ?></td>
		<td><?php echo $artist ?></td>
		<td><?php echo $lyrics ?></td>
		<td><button class="btn btn-success"><a href="edit.php" class="text-light">edit</a></button> &nbsp;
		<button class="btn btn-success"><a href="delete.php" class="text-light">delete</a></button></td>
	</tr>
	<?php } ?>
  </tbody>
</table>
  			</div>
			</div>
			</div>
		</div>
	</div>
</body>
</html>