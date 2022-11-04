<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/peysapp.css">
	<title>Peys App</title>

</head>
<body>
	<?php
		$imgSize = 60;
		$borderColor = '#000000';

		if (isset($_POST['btnprocess'])) {
			$imgSize = $_POST['imgSize'];
			$borderColor = $_POST['borderColor'];
		}
  	?>
	<form method="post">
		<h1>Peys App</h1>
		<label for="imgSize">Select Photo Size:</label>
		<input type="range" name="imgSize" id="imgSize" min="10" max="100" step="10" value="$imgSize">
		<br>

		<label for="borderColor">Select Border Color:</label>
		<input type="color" name="borderColor" id="borderColor">
		<br>
		<input type="submit" name="btnprocess" value="Process">
		<br>
		<br>
	
		<div style="width: 13%; height: auto; margin-left: 0%; margin-top: 4%;">
			<div align="center">
				<img class="col-lg-4" src="img/tzuyuu.jpg"  style="height: <?php echo $imgSize."%";?>; width: <?php echo $imgSize."%";?>;  border: 3px solid<?php echo $borderColor;?>">
			</div>
			
		</div>
		
	</form>
</body>
</html>