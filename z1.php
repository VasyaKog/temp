<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Завдання 1</title>
	<script type="text/javascript" src="js/main.js"></script>
	<link rel="stylesheet" type="text/css" href="style/main.css">
</head>
<body>
	<section class="left1">
	<a href="index.html">На головну</a>
	<h3>Обчислити суму чисел більших нуля</h3>
		<form action="z1.php" method="get">
		<ol>
				<li><input type="text" name="first" id="first" placeholder="Введіть число 1"></li>
				<li><input type="text" name="second" id="second" placeholder="Введіть число 2"></li>
				<li><input type="text" name="third" id="third" placeholder="Введіть число 3"></li>
				<li><input type="text" name="fourth" id="fourth" placeholder="Введіть число 4"></li>
			</ol>
			<input type="submit" value="Обчислити"><br>
			<input type="button" value="Очистити">
		</form>
		<?
		$sum=0;
		if($_GET[first]>0) $sum+=$_GET[first];
		if($_GET[second]>0) $sum+=$_GET[second];
		if($_GET[third]>0) $sum+=$_GET[third];
		if($_GET[fourth]>0) $sum+=$_GET[fourth];
		echo $sum;
		?>
		<div id="rez">
		</div>
	</section>	
	<section class="right1">
		
	</section>
</body>
</html>