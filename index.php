<?php
include __DIR__ . '/mabyday.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=1920px, initial-scale=1.0">
	<title>Today you can give the money</title>
</head>
<body>
	<!-- So TAB here -->
	<div class="headering"></div>
	<div class="imagenation">
		<div class="foor--fool"></div>
		<p><?=$output?></p>
		<input type="hidden" name="random">
		<input type="submit" name="but_btn">
	</div>
</body>
</html>