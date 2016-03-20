<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Ajax Image upload</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="script.js"></script>
	<style type="text/css">
	img{width: 400px;height: 400px;}
	</style>
</head>
<body>

<form id="form1" enctype="multipart/form-data">
	<input type="file" name="upload_file">
	<input type="submit" >
</form>

<div id="showimage">
	<?php if(isset($_SESSION['filepath'])){
		echo "<img src=".$_SESSION['filepath']." />";
		} ?>

</div>
</body>
</html>